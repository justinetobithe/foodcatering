<?php
/*
Theme Name : Default 101
*/

$cmsThumbnailAllowedSizes = array(
	'200x120',
	'203x153',
	'205x154',
	'176x167',
	'600x600',
	'84x73',
	'327x175',
	'234x155',
	'388x294',
	'78x66'
);

/*Sample functions*/
function custom_function_add_subscribers()
{
	$post_data = $_POST;
	mailchimp_add_subscriber();
	redirect(get_current_url());
}

/* CUSTOM FUNCTIONS: Products Related functions */
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * breadcrumbs for ecatalog
 * 
 * @param array $uri
 * @return string
 */
function ecatalog_breadcrumbs($uri)
{
	array_shift($uri);
	print_r($uri);
	die;
}


/**
 * Get a category array from an array of categories based on url_slug.
 *
 * @param array $arr
 * @param string $slug
 * @return array
 */

function get_category_from_categories_array($arr, $slug)
{
	$temp = array_filter($arr, function ($elem) use ($slug) {
		return $elem['url_slug'] == $slug;
	});
	$temp = array_values($temp);
	return $temp[0];
}


# HIERARCHICAL SQL
# NOTE: not used
# TODO: remove if not used
function getFullTree($ancestor)
{
	global $db;
	$sql = "SELECT t1.id AS lev1, t2.id as lev2, t3.id as lev3, t4.id as lev4
	FROM product_categories AS t1
	LEFT JOIN product_categories AS t2 ON t2.category_parent = t1.id
	LEFT JOIN product_categories AS t3 ON t3.category_parent = t2.id
	LEFT JOIN product_categories AS t4 ON t4.category_parent = t3.id
	WHERE t1.id = $ancestor";

	$qry = $db->query($sql);
	$retrieves = array();

	while ($row = $db->fetch($qry, 'assoc')) {
		$retrieves[] = $row;
	}
	return $retrieves;
}

function getDescendants($ancestor)
{
	global $db;
	$sql = "SELECT t1.id AS lev1, t2.id as lev2, t3.id as lev3, t4.id as lev4
	FROM product_categories AS t1
	LEFT JOIN product_categories AS t2 ON t2.category_parent = t1.id
	LEFT JOIN product_categories AS t3 ON t3.category_parent = t2.id
	LEFT JOIN product_categories AS t4 ON t4.category_parent = t3.id
	WHERE t1.id = $ancestor";

	$qry = $db->query($sql);
	$retrieves = array();

	while ($row = $db->fetch($qry, 'assoc')) {
		if ($row['lev1'] != null) $retrieves[$row['lev1']] = $row['lev1'];
		if ($row['lev2'] != null) $retrieves[$row['lev2']] = $row['lev2'];
		if ($row['lev3'] != null) $retrieves[$row['lev3']] = $row['lev3'];
		if ($row['lev4'] != null) $retrieves[$row['lev4']] = $row['lev4'];
	}

	return array_keys($retrieves);
}

function get_products_by_category_array($category_array, $limit = 4)
{
	global $db;
	$in_clause = join(',', $category_array);

	$sql = "SELECT rel.category_id, p.*  
	FROM `products_categories_relationship` as rel
	JOIN `products` as p 
	ON rel.product_id = p.id
	WHERE rel.category_id IN ($in_clause)
	GROUP BY p.id
	LIMIT $limit";

	$qry = $db->query($sql);
	$retrieves = array();

	while ($row = $db->fetch($qry, 'assoc')) {
		$retrieves[] = $row;
	}
	return $retrieves;
}

/**
 * Gets products categories
 *
 * @return array
 */
function get_parent_product_categories($id = 0)
{
	$product_categories = array();
	global $db;
	$sql = "SELECT * FROM `product_categories` WHERE`category_parent` = $id";
	$qry = $db->query($sql);

	while ($row = $db->fetch($qry, 'assoc')) {
		$product_categories[] = $row;
	}
	return $product_categories;
}

function get_child_product_categories($parent_id)
{
	global $db;
	$sql = "SELECT * FROM `product_categories` WHERE`category_parent` = $parent_id";
	$qry = $db->query($sql);

	$children = array();

	while ($row = $db->fetch($qry, 'assoc')) {
		$children[] = $row;
	}
	return $children;
}

function cms_get_sub_categories($tree = array())
{
	$cat = array();

	if (isset($tree['children'])) {
		foreach ($tree['children'] as $key => $value) {
			$cat[] = $value['detail'];
		}
	}

	return $cat;
}
function cms_get_category_products($tree = array(), $full = false)
{
	$products = array();

	if (isset($tree['products'])) {
		foreach ($tree['products'] as $key => $value) {
			$products[$value->id] = $value;
		}
	}

	if ($full) {
		foreach ($tree['children'] as $key => $value) {
			$temp_prod = cms_get_category_products($value, $full);
			foreach ($temp_prod as $key => $value) {
				$products[$value->id] = $value;
			}
		}
	}

	return $products;
}

function cms_get_category_parent_heirarchy($categories = array(), $parent = 0)
{
	$heirarchy = array();

	foreach ($categories as $key => $value) {
		if ($value->category_parent == $parent) {
			$category = array(
				"detail" => $value,
				"children" => $this->get_category_parent_heirarchy($categories, $value->id),
			);
			$heirarchy[$value->id] = $category;
		}
	}

	return $heirarchy;
}

function get_by_categories()
{

	global $db;

	$categories = $db->select("SELECT `p`.*, COUNT(`pr`.`id`) `ctr` FROM `post_category` `p` LEFT JOIN `posts_categories_relationship` `pr` ON `p`.`id` = `pr`.`category_id` WHERE `status` = 'active' GROUP BY `p`.`id`");

	if (count($categories)) {
		$_output = array();

		foreach ($categories as $key => $value) {
			$_output[] = '<li><a href="' . get_bloginfo('baseurl') . "categories/" . $value->url_slug . '/">' . $value->category_name . '<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>';
		}
	} else
		$_output[] = '<li>No categories created.<i class="fa fa-chevron-right" aria-hidden="true"></i></li>';

	return $_output;
}

function get_by_recent_post()
{
	global $db;


	$recent_posts = $db->select("SELECT * FROM `cms_posts` WHERE `status` = 'publish' AND `post_type` = 'post' AND `post_status` = 'active' ORDER BY `post_date` DESC LIMIT 3");

	$_output = array();
	if (count($recent_posts) >= 1 && $recent_posts[0]->id !== NULL) {
		foreach ($recent_posts as $key => $value) {

			$_output[] = '<li class="row no-gutters">
			<div class="col-12 col-lg-4">
			<a href="' . get_bloginfo('baseurl') . $value->url_slug . '/">
			<img class="img-responsive img-fluid" src="' . $value->featured_image . '" alt="' . $value->post_title . '" /></a>
			</div>
			<div class="col-12 col-lg-8">
				<h5 class="cat"><img class="vertical" src="' . get_bloginfo('template_directory') . '/assets/images/blog/vertical-line.png" alt="Vertical Line">
					Entertainment</h5>
				<h5><a class="subtitle" href="' . get_bloginfo('baseurl') . $value->url_slug . '/">' . $value->post_title . '</a></h5>
				<h6 class="date">' . date('F d, Y', strtotime($value->post_date)) . '</h6>
			</div>
			<hr />
		</li>';
		}
	} else
		$_output[] = '<li><div class="row"><p>There are no posts to show.</p></div></li>';

	return $_output;
}

function get_post_featured($title = '', $permalink = '')
{
	global $db;

	$featured_image = $db->select("SELECT featured_image FROM `cms_posts` WHERE post_title = '" . $title . "' AND url_slug = '" . $permalink . "'");

	return $featured_image[0]->featured_image;
}


function get_post_excerpt($title = '', $permalink = '')
{
	global $db;

	$content = $db->select("SELECT post_content FROM `cms_posts` WHERE post_title = '" . $title . "' AND url_slug = '" . $permalink . "'");

	$re = '/<p>(.+?)<\/p>/';
	preg_match_all($re, $content[0]->post_content, $matches, PREG_SET_ORDER, 0);

	return $matches[0][0];
}

function blog_pagination()
{
?>
	<div class="btn-toolbar" role="toolbar" aria-label="...">
		<?php for ($page = 1; $page <= cms_get_max_post_offset(); $page++) { ?>
			<div class="btn-group <?php echo cms_current_page_offset() == $page ? 'active' : ''; ?>" role="group" aria-label="...">
				<a href="<?php echo get_current_uri() ?>?page=<?php echo $page; ?>"><?php echo $page; ?></a>
			</div>
		<?php } ?>
	</div>
<?php
}
