-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 14 jan. 2019 à 09:53
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wordpress_dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Un commentateur WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-01-11 09:54:53', '2019-01-11 08:54:53', 'Bonjour, ceci est un commentaire.\nPour débuter avec la modération, la modification et la suppression de commentaires, veuillez visiter l’écran des Commentaires dans le Tableau de bord.\nLes avatars des personnes qui commentent arrivent depuis <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/wordpress_dev', 'yes'),
(2, 'home', 'http://localhost/wordpress_dev', 'yes'),
(3, 'blogname', 'MonSite', 'yes'),
(4, 'blogdescription', 'Un cours wordpress', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'mathieuquittard@evogue.fr', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F Y', 'yes'),
(24, 'time_format', 'G \\h i \\m\\i\\n', 'yes'),
(25, 'links_updated_date_format', 'j F Y G \\h i \\m\\i\\n', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:90:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:38:\"index.php?&page_id=5&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:4:{i:0;s:25:\"add-to-any/add-to-any.php\";i:1;s:36:\"contact-form-7/wp-contact-form-7.php\";i:2;s:47:\"show-current-template/show-current-template.php\";i:3;s:24:\"simple-lightbox/main.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:68:\"C:\\xampp\\htdocs\\wordpress_dev/wp-content/plugins/akismet/akismet.php\";i:1;s:0:\"\";}', 'no'),
(40, 'template', 'twentysixteen', 'yes'),
(41, 'stylesheet', 'twentysixteen-child', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '43764', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:3:{i:1;a:0:{}i:2;a:4:{s:5:\"title\";s:0:\"\";s:4:\"text\";s:241:\"<p style=\"text-align: justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis faucibus varius. Nulla vitae quam eget nisl elementum suscipit. Maecenas consequat augue in augue ultricies, at aliquam enim blandit.</p>\";s:6:\"filter\";b:1;s:6:\"visual\";b:1;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', 'Europe/Paris', 'yes'),
(83, 'page_for_posts', '7', 'yes'),
(84, 'page_on_front', '5', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '12', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '0', 'yes'),
(93, 'initial_db_version', '43764', 'yes'),
(94, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(95, 'fresh_site', '0', 'yes'),
(96, 'WPLANG', 'fr_FR', 'yes'),
(97, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_recent-posts', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-comments', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'sidebars_widgets', 'a:9:{s:19:\"wp_inactive_widgets\";a:0:{}s:21:\"footer_pleine_largeur\";a:1:{i:0;s:10:\"nav_menu-2\";}s:13:\"footer_gauche\";a:1:{i:0;s:13:\"custom_html-2\";}s:13:\"footer_milieu\";a:1:{i:0;s:6:\"text-2\";}s:13:\"footer_droite\";a:1:{i:0;s:23:\"a2a_share_save_widget-2\";}s:9:\"sidebar-1\";a:1:{i:0;s:8:\"search-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}s:13:\"array_version\";i:3;}', 'yes'),
(103, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_nav_menu', 'a:2:{i:2;a:1:{s:8:\"nav_menu\";i:3;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_custom_html', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:7:\"content\";s:380:\"<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5250.516892404636!2d2.3563722639948135!3d48.853281913559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671fd10fa77a9%3A0xbefa2358f9e7a776!2s18+Rue+Geoffroy+l&#39;Asnier%2C+75004+Paris!5e0!3m2!1sfr!2sfr!4v1547216200920\" width=\"100%\" height=\"auto\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'cron', 'a:4:{i:1547456094;a:4:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1547456238;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1547457193;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(113, 'theme_mods_twentynineteen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1547197311;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(127, 'auto_core_update_notified', 'a:4:{s:4:\"type\";s:7:\"success\";s:5:\"email\";s:25:\"mathieuquittard@evogue.fr\";s:7:\"version\";s:5:\"5.0.3\";s:9:\"timestamp\";i:1547196927;}', 'no'),
(128, '_site_transient_timeout_browser_0ac1f9240df96b3586c220faef490724', '1547801838', 'no'),
(129, '_site_transient_browser_0ac1f9240df96b3586c220faef490724', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:12:\"71.0.3578.98\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(143, 'can_compress_scripts', '1', 'no'),
(148, 'current_theme', 'Mon theme enfant', 'yes'),
(149, 'theme_mods_twentysixteen', 'a:12:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:7:\"primary\";i:2;}s:18:\"custom_css_post_id\";i:-1;s:16:\"background_color\";s:6:\"1a1a1a\";s:12:\"color_scheme\";s:7:\"default\";s:21:\"page_background_color\";s:7:\"#ffffff\";s:10:\"link_color\";s:7:\"#007acc\";s:15:\"main_text_color\";s:7:\"#1a1a1a\";s:20:\"secondary_text_color\";s:7:\"#686868\";s:12:\"header_image\";s:90:\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720.jpg\";s:17:\"header_image_data\";O:8:\"stdClass\":5:{s:13:\"attachment_id\";i:17;s:3:\"url\";s:90:\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720.jpg\";s:13:\"thumbnail_url\";s:90:\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720.jpg\";s:6:\"height\";i:303;s:5:\"width\";i:1200;}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1547204337;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:1:{i:0;s:8:\"search-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}}', 'yes'),
(150, 'theme_switched', '', 'yes'),
(165, 'recently_activated', 'a:1:{s:9:\"hello.php\";i:1547199888;}', 'yes'),
(178, 'wpcf7', 'a:2:{s:7:\"version\";s:5:\"5.1.1\";s:13:\"bulk_validate\";a:4:{s:9:\"timestamp\";d:1547203631;s:7:\"version\";s:5:\"5.1.1\";s:11:\"count_valid\";i:1;s:13:\"count_invalid\";i:0;}}', 'yes'),
(180, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes'),
(184, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:65:\"https://downloads.wordpress.org/release/fr_FR/wordpress-5.0.3.zip\";s:6:\"locale\";s:5:\"fr_FR\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:65:\"https://downloads.wordpress.org/release/fr_FR/wordpress-5.0.3.zip\";s:10:\"no_content\";b:0;s:11:\"new_bundled\";b:0;s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"5.0.3\";s:7:\"version\";s:5:\"5.0.3\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.0\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1547454794;s:15:\"version_checked\";s:5:\"5.0.3\";s:12:\"translations\";a:0:{}}', 'no'),
(186, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1547454797;s:7:\"checked\";a:4:{s:14:\"twentynineteen\";s:3:\"1.2\";s:15:\"twentyseventeen\";s:3:\"2.0\";s:19:\"twentysixteen-child\";s:3:\"1.0\";s:13:\"twentysixteen\";s:3:\"1.8\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(187, 'slb_version', '2.7.0', 'yes'),
(188, 'slb_options', 'a:27:{s:7:\"enabled\";b:1;s:12:\"enabled_home\";b:1;s:12:\"enabled_post\";b:1;s:12:\"enabled_page\";b:1;s:15:\"enabled_archive\";b:1;s:14:\"enabled_widget\";b:0;s:12:\"enabled_menu\";b:0;s:11:\"group_links\";b:1;s:10:\"group_post\";b:1;s:13:\"group_gallery\";b:0;s:12:\"group_widget\";b:0;s:10:\"group_menu\";b:0;s:10:\"ui_autofit\";b:1;s:10:\"ui_animate\";b:1;s:19:\"slideshow_autostart\";b:1;s:18:\"slideshow_duration\";s:1:\"6\";s:10:\"group_loop\";b:1;s:18:\"ui_overlay_opacity\";s:3:\"0.8\";s:16:\"ui_title_default\";b:0;s:11:\"txt_loading\";s:7:\"Loading\";s:9:\"txt_close\";s:5:\"Close\";s:12:\"txt_nav_next\";s:4:\"Next\";s:12:\"txt_nav_prev\";s:8:\"Previous\";s:19:\"txt_slideshow_start\";s:15:\"Start slideshow\";s:18:\"txt_slideshow_stop\";s:14:\"Stop slideshow\";s:16:\"txt_group_status\";s:25:\"Item %current% of %total%\";s:13:\"theme_default\";s:11:\"slb_default\";}', 'yes'),
(197, 'theme_mods_twentysixteen-child', 'a:6:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:7:\"primary\";i:2;}s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1547204297;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:1:{i:0;s:8:\"search-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}s:12:\"header_image\";s:92:\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720-1.jpg\";s:17:\"header_image_data\";O:8:\"stdClass\":5:{s:13:\"attachment_id\";i:27;s:3:\"url\";s:92:\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720-1.jpg\";s:13:\"thumbnail_url\";s:92:\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720-1.jpg\";s:6:\"height\";i:280;s:5:\"width\";i:1200;}}', 'yes'),
(210, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1547454797;s:7:\"checked\";a:6:{s:25:\"add-to-any/add-to-any.php\";s:6:\"1.7.33\";s:19:\"akismet/akismet.php\";s:3:\"4.1\";s:36:\"contact-form-7/wp-contact-form-7.php\";s:5:\"5.1.1\";s:9:\"hello.php\";s:5:\"1.7.1\";s:47:\"show-current-template/show-current-template.php\";s:5:\"0.3.0\";s:24:\"simple-lightbox/main.php\";s:5:\"2.7.0\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:6:{s:25:\"add-to-any/add-to-any.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:24:\"w.org/plugins/add-to-any\";s:4:\"slug\";s:10:\"add-to-any\";s:6:\"plugin\";s:25:\"add-to-any/add-to-any.php\";s:11:\"new_version\";s:6:\"1.7.33\";s:3:\"url\";s:41:\"https://wordpress.org/plugins/add-to-any/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/add-to-any.1.7.33.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:62:\"https://ps.w.org/add-to-any/assets/icon-256x256.png?rev=972738\";s:2:\"1x\";s:54:\"https://ps.w.org/add-to-any/assets/icon.svg?rev=972738\";s:3:\"svg\";s:54:\"https://ps.w.org/add-to-any/assets/icon.svg?rev=972738\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:66:\"https://ps.w.org/add-to-any/assets/banner-1544x500.png?rev=1629680\";s:2:\"1x\";s:65:\"https://ps.w.org/add-to-any/assets/banner-772x250.png?rev=1629680\";}s:11:\"banners_rtl\";a:0:{}}s:19:\"akismet/akismet.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:3:\"4.1\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:54:\"https://downloads.wordpress.org/plugin/akismet.4.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}}s:36:\"contact-form-7/wp-contact-form-7.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:28:\"w.org/plugins/contact-form-7\";s:4:\"slug\";s:14:\"contact-form-7\";s:6:\"plugin\";s:36:\"contact-form-7/wp-contact-form-7.php\";s:11:\"new_version\";s:5:\"5.1.1\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/contact-form-7/\";s:7:\"package\";s:63:\"https://downloads.wordpress.org/plugin/contact-form-7.5.1.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:66:\"https://ps.w.org/contact-form-7/assets/icon-256x256.png?rev=984007\";s:2:\"1x\";s:66:\"https://ps.w.org/contact-form-7/assets/icon-128x128.png?rev=984007\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:69:\"https://ps.w.org/contact-form-7/assets/banner-1544x500.png?rev=860901\";s:2:\"1x\";s:68:\"https://ps.w.org/contact-form-7/assets/banner-772x250.png?rev=880427\";}s:11:\"banners_rtl\";a:0:{}}s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:3:\"1.6\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=969907\";s:2:\"1x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=969907\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:65:\"https://ps.w.org/hello-dolly/assets/banner-772x250.png?rev=478342\";}s:11:\"banners_rtl\";a:0:{}}s:47:\"show-current-template/show-current-template.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:35:\"w.org/plugins/show-current-template\";s:4:\"slug\";s:21:\"show-current-template\";s:6:\"plugin\";s:47:\"show-current-template/show-current-template.php\";s:11:\"new_version\";s:5:\"0.3.0\";s:3:\"url\";s:52:\"https://wordpress.org/plugins/show-current-template/\";s:7:\"package\";s:70:\"https://downloads.wordpress.org/plugin/show-current-template.0.3.0.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:73:\"https://ps.w.org/show-current-template/assets/icon-256x256.png?rev=976031\";s:2:\"1x\";s:65:\"https://ps.w.org/show-current-template/assets/icon.svg?rev=976031\";s:3:\"svg\";s:65:\"https://ps.w.org/show-current-template/assets/icon.svg?rev=976031\";}s:7:\"banners\";a:0:{}s:11:\"banners_rtl\";a:0:{}}s:24:\"simple-lightbox/main.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:29:\"w.org/plugins/simple-lightbox\";s:4:\"slug\";s:15:\"simple-lightbox\";s:6:\"plugin\";s:24:\"simple-lightbox/main.php\";s:11:\"new_version\";s:5:\"2.7.0\";s:3:\"url\";s:46:\"https://wordpress.org/plugins/simple-lightbox/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/simple-lightbox.zip\";s:5:\"icons\";a:1:{s:7:\"default\";s:59:\"https://s.w.org/plugins/geopattern-icon/simple-lightbox.svg\";}s:7:\"banners\";a:0:{}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(211, 'widget_a2a_share_save_widget', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(212, 'widget_a2a_follow_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(213, 'addtoany_options', 'a:35:{s:8:\"position\";s:6:\"bottom\";s:30:\"display_in_posts_on_front_page\";s:2:\"-1\";s:33:\"display_in_posts_on_archive_pages\";s:2:\"-1\";s:19:\"display_in_excerpts\";s:2:\"-1\";s:16:\"display_in_posts\";s:2:\"-1\";s:16:\"display_in_pages\";s:2:\"-1\";s:22:\"display_in_attachments\";s:2:\"-1\";s:15:\"display_in_feed\";s:2:\"-1\";s:7:\"onclick\";s:2:\"-1\";s:9:\"icon_size\";s:2:\"32\";s:7:\"icon_bg\";s:8:\"original\";s:13:\"icon_bg_color\";s:7:\"#2a2a2a\";s:7:\"icon_fg\";s:8:\"original\";s:13:\"icon_fg_color\";s:7:\"#ffffff\";s:6:\"button\";s:4:\"NONE\";s:13:\"button_custom\";s:0:\"\";s:17:\"button_show_count\";s:2:\"-1\";s:6:\"header\";s:0:\"\";s:23:\"additional_js_variables\";s:0:\"\";s:14:\"additional_css\";s:0:\"\";s:12:\"custom_icons\";s:2:\"-1\";s:16:\"custom_icons_url\";s:1:\"/\";s:17:\"custom_icons_type\";s:3:\"png\";s:18:\"custom_icons_width\";s:0:\"\";s:19:\"custom_icons_height\";s:0:\"\";s:5:\"cache\";s:2:\"-1\";s:11:\"button_text\";s:8:\"Partager\";s:24:\"special_facebook_options\";a:1:{s:10:\"show_count\";s:2:\"-1\";}s:22:\"special_reddit_options\";a:1:{s:10:\"show_count\";s:2:\"-1\";}s:15:\"active_services\";a:5:{i:0;s:8:\"facebook\";i:1;s:7:\"twitter\";i:2;s:11:\"google_plus\";i:3;s:6:\"reddit\";i:4;s:8:\"linkedin\";}s:29:\"special_facebook_like_options\";a:2:{s:10:\"show_count\";s:2:\"-1\";s:4:\"verb\";s:4:\"like\";}s:29:\"special_twitter_tweet_options\";a:1:{s:10:\"show_count\";s:2:\"-1\";}s:30:\"special_google_plusone_options\";a:1:{s:10:\"show_count\";s:2:\"-1\";}s:33:\"special_google_plus_share_options\";a:1:{s:10:\"show_count\";s:2:\"-1\";}s:29:\"special_pinterest_pin_options\";a:1:{s:10:\"show_count\";s:2:\"-1\";}}', 'yes'),
(224, '_site_transient_timeout_theme_roots', '1547456596', 'no'),
(225, '_site_transient_theme_roots', 'a:4:{s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:19:\"twentysixteen-child\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";}', 'no'),
(226, '_transient_is_multi_author', '0', 'yes');

-- --------------------------------------------------------

--
-- Structure de la table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_edit_lock', '1547200488:1'),
(4, 7, '_edit_lock', '1547199602:1'),
(5, 9, '_wp_trash_meta_status', 'publish'),
(6, 9, '_wp_trash_meta_time', '1547198607'),
(7, 10, '_edit_lock', '1547198484:1'),
(8, 11, '_edit_lock', '1547198774:1'),
(9, 12, '_wp_attached_file', '2019/01/logo.png'),
(10, 12, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:256;s:6:\"height\";i:256;s:4:\"file\";s:16:\"2019/01/logo.png\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:16:\"logo-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(11, 11, '_wp_trash_meta_status', 'publish'),
(12, 11, '_wp_trash_meta_time', '1547198813'),
(13, 13, '_edit_lock', '1547199256:1'),
(14, 14, '_wp_attached_file', '2019/01/prague-3010407_960_720.jpg'),
(15, 14, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:571;s:4:\"file\";s:34:\"2019/01/prague-3010407_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:34:\"prague-3010407_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:34:\"prague-3010407_960_720-300x178.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:178;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:34:\"prague-3010407_960_720-768x457.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:457;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(16, 15, '_wp_attached_file', '2019/01/cropped-prague-3010407_960_720.jpg'),
(17, 15, '_wp_attachment_context', 'custom-header'),
(18, 15, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1200;s:6:\"height\";i:258;s:4:\"file\";s:42:\"2019/01/cropped-prague-3010407_960_720.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:42:\"cropped-prague-3010407_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:41:\"cropped-prague-3010407_960_720-300x65.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:65;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:42:\"cropped-prague-3010407_960_720-768x165.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:165;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:43:\"cropped-prague-3010407_960_720-1024x220.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:220;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:43:\"cropped-prague-3010407_960_720-1200x258.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:258;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}s:17:\"attachment_parent\";i:14;}'),
(19, 15, '_wp_attachment_custom_header_last_used_twentysixteen', '1547199215'),
(20, 15, '_wp_attachment_is_custom_header', 'twentysixteen'),
(21, 16, '_wp_attached_file', '2019/01/autumn-83761_960_720.jpg'),
(22, 16, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:32:\"2019/01/autumn-83761_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:32:\"autumn-83761_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:32:\"autumn-83761_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:32:\"autumn-83761_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(23, 17, '_wp_attached_file', '2019/01/cropped-autumn-83761_960_720.jpg'),
(24, 17, '_wp_attachment_context', 'custom-header'),
(25, 17, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1200;s:6:\"height\";i:303;s:4:\"file\";s:40:\"2019/01/cropped-autumn-83761_960_720.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:40:\"cropped-autumn-83761_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:39:\"cropped-autumn-83761_960_720-300x76.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:76;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:40:\"cropped-autumn-83761_960_720-768x194.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:194;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:41:\"cropped-autumn-83761_960_720-1024x259.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:259;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:41:\"cropped-autumn-83761_960_720-1200x303.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:303;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}s:17:\"attachment_parent\";i:16;}'),
(26, 17, '_wp_attachment_custom_header_last_used_twentysixteen', '1547199296'),
(27, 17, '_wp_attachment_is_custom_header', 'twentysixteen'),
(28, 13, '_wp_trash_meta_status', 'publish'),
(29, 13, '_wp_trash_meta_time', '1547199296'),
(30, 18, '_form', '<label> Votre nom (obligatoire)\n    [text* your-name] </label>\n\n<label> Votre adresse de messagerie (obligatoire)\n    [email* your-email] </label>\n\n<label> Objet\n    [text your-subject] </label>\n\n<label> Votre message\n    [textarea your-message] </label>\n\n[submit \"Envoyer\"]'),
(31, 18, '_mail', 'a:8:{s:7:\"subject\";s:24:\"MonSite \"[your-subject]\"\";s:6:\"sender\";s:35:\"MonSite <mathieuquittard@evogue.fr>\";s:4:\"body\";s:198:\"De : [your-name] <[your-email]>\nObjet : [your-subject]\n\nCorps du message :\n[your-message]\n\n-- \nCet e-mail a été envoyé via le formulaire de contact de MonSite (http://localhost/wordpress_dev)\";s:9:\"recipient\";s:25:\"mathieuquittard@evogue.fr\";s:18:\"additional_headers\";s:22:\"Reply-To: [your-email]\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";i:0;s:13:\"exclude_blank\";i:0;}'),
(32, 18, '_mail_2', 'a:9:{s:6:\"active\";b:0;s:7:\"subject\";s:24:\"MonSite \"[your-subject]\"\";s:6:\"sender\";s:35:\"MonSite <mathieuquittard@evogue.fr>\";s:4:\"body\";s:140:\"Corps du message :\n[your-message]\n\n-- \nCet e-mail a été envoyé via le formulaire de contact de MonSite (http://localhost/wordpress_dev)\";s:9:\"recipient\";s:12:\"[your-email]\";s:18:\"additional_headers\";s:35:\"Reply-To: mathieuquittard@evogue.fr\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";i:0;s:13:\"exclude_blank\";i:0;}'),
(33, 18, '_messages', 'a:8:{s:12:\"mail_sent_ok\";s:45:\"Merci pour votre message. Il a été envoyé.\";s:12:\"mail_sent_ng\";s:102:\"Une erreur s’est produite lors de l’envoi de votre message. Veuillez essayer à nouveau plus tard.\";s:16:\"validation_error\";s:88:\"Un ou plusieurs champs contiennent une erreur. Veuillez vérifier et essayer à nouveau.\";s:4:\"spam\";s:102:\"Une erreur s’est produite lors de l’envoi de votre message. Veuillez essayer à nouveau plus tard.\";s:12:\"accept_terms\";s:77:\"Vous devez accepter les termes et conditions avant d’envoyer votre message.\";s:16:\"invalid_required\";s:25:\"Ce champ est obligatoire.\";s:16:\"invalid_too_long\";s:23:\"Le champ est trop long.\";s:17:\"invalid_too_short\";s:24:\"Le champ est trop court.\";}'),
(34, 18, '_additional_settings', NULL),
(35, 18, '_locale', 'fr_FR'),
(36, 19, '_edit_lock', '1547200077:1'),
(37, 21, '_menu_item_type', 'post_type'),
(38, 21, '_menu_item_menu_item_parent', '0'),
(39, 21, '_menu_item_object_id', '19'),
(40, 21, '_menu_item_object', 'page'),
(41, 21, '_menu_item_target', ''),
(42, 21, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(43, 21, '_menu_item_xfn', ''),
(44, 21, '_menu_item_url', ''),
(46, 22, '_menu_item_type', 'post_type'),
(47, 22, '_menu_item_menu_item_parent', '0'),
(48, 22, '_menu_item_object_id', '7'),
(49, 22, '_menu_item_object', 'page'),
(50, 22, '_menu_item_target', ''),
(51, 22, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(52, 22, '_menu_item_xfn', ''),
(53, 22, '_menu_item_url', ''),
(55, 23, '_menu_item_type', 'post_type'),
(56, 23, '_menu_item_menu_item_parent', '0'),
(57, 23, '_menu_item_object_id', '5'),
(58, 23, '_menu_item_object', 'page'),
(59, 23, '_menu_item_target', ''),
(60, 23, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(61, 23, '_menu_item_xfn', ''),
(62, 23, '_menu_item_url', ''),
(64, 26, '_edit_lock', '1547202597:1'),
(65, 27, '_wp_attached_file', '2019/01/cropped-autumn-83761_960_720-1.jpg'),
(66, 27, '_wp_attachment_context', 'custom-header'),
(67, 27, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1200;s:6:\"height\";i:280;s:4:\"file\";s:42:\"2019/01/cropped-autumn-83761_960_720-1.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:42:\"cropped-autumn-83761_960_720-1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:41:\"cropped-autumn-83761_960_720-1-300x70.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:70;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:42:\"cropped-autumn-83761_960_720-1-768x179.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:179;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:43:\"cropped-autumn-83761_960_720-1-1024x239.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:239;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:43:\"cropped-autumn-83761_960_720-1-1200x280.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}s:17:\"attachment_parent\";i:16;}'),
(68, 27, '_wp_attachment_custom_header_last_used_twentysixteen-child', '1547205003'),
(69, 27, '_wp_attachment_is_custom_header', 'twentysixteen-child'),
(70, 28, '_wp_trash_meta_status', 'publish'),
(71, 28, '_wp_trash_meta_time', '1547205004'),
(72, 3, '_edit_lock', '1547207575:1'),
(73, 30, '_edit_lock', '1547223439:1'),
(74, 32, '_edit_lock', '1547221474:1'),
(75, 34, '_menu_item_type', 'post_type'),
(76, 34, '_menu_item_menu_item_parent', '0'),
(77, 34, '_menu_item_object_id', '32'),
(78, 34, '_menu_item_object', 'page'),
(79, 34, '_menu_item_target', ''),
(80, 34, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(81, 34, '_menu_item_xfn', ''),
(82, 34, '_menu_item_url', ''),
(84, 35, '_menu_item_type', 'post_type'),
(85, 35, '_menu_item_menu_item_parent', '0'),
(86, 35, '_menu_item_object_id', '30'),
(87, 35, '_menu_item_object', 'page'),
(88, 35, '_menu_item_target', ''),
(89, 35, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(90, 35, '_menu_item_xfn', ''),
(91, 35, '_menu_item_url', ''),
(93, 36, '_menu_item_type', 'post_type'),
(94, 36, '_menu_item_menu_item_parent', '0'),
(95, 36, '_menu_item_object_id', '19'),
(96, 36, '_menu_item_object', 'page'),
(97, 36, '_menu_item_target', ''),
(98, 36, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(99, 36, '_menu_item_xfn', ''),
(100, 36, '_menu_item_url', ''),
(102, 37, '_menu_item_type', 'post_type'),
(103, 37, '_menu_item_menu_item_parent', '0'),
(104, 37, '_menu_item_object_id', '3'),
(105, 37, '_menu_item_object', 'page'),
(106, 37, '_menu_item_target', ''),
(107, 37, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(108, 37, '_menu_item_xfn', ''),
(109, 37, '_menu_item_url', ''),
(111, 38, '_edit_lock', '1547221602:1'),
(112, 39, '_wp_attached_file', '2019/01/abstract-21118_960_720.jpg'),
(113, 39, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:34:\"2019/01/abstract-21118_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:34:\"abstract-21118_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:34:\"abstract-21118_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:34:\"abstract-21118_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(114, 40, '_wp_attached_file', '2019/01/autumn-83761_960_720-1.jpg'),
(115, 40, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:34:\"2019/01/autumn-83761_960_720-1.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:34:\"autumn-83761_960_720-1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:34:\"autumn-83761_960_720-1-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:34:\"autumn-83761_960_720-1-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(116, 41, '_wp_attached_file', '2019/01/autumn-3804001_960_720.jpg'),
(117, 41, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:34:\"2019/01/autumn-3804001_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:34:\"autumn-3804001_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:34:\"autumn-3804001_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:34:\"autumn-3804001_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:2:\"16\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:8:\"ILCE-7M2\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:2:\"17\";s:3:\"iso\";s:3:\"100\";s:13:\"shutter_speed\";s:3:\"0.4\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(118, 42, '_wp_attached_file', '2019/01/autumn-leaf-3881675_960_720.jpg'),
(119, 42, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:39:\"2019/01/autumn-leaf-3881675_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:39:\"autumn-leaf-3881675_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:39:\"autumn-leaf-3881675_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:39:\"autumn-leaf-3881675_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"6\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:10:\"NIKON D750\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:3:\"290\";s:3:\"iso\";s:3:\"640\";s:13:\"shutter_speed\";s:6:\"0.0025\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(120, 43, '_wp_attached_file', '2019/01/fall-foliage-3705550_960_720.jpg'),
(121, 43, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:40:\"2019/01/fall-foliage-3705550_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:40:\"fall-foliage-3705550_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:40:\"fall-foliage-3705550_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:40:\"fall-foliage-3705550_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:3:\"6.3\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:15:\"Canon EOS 1100D\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:3:\"179\";s:3:\"iso\";s:3:\"200\";s:13:\"shutter_speed\";s:9:\"0.0015625\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(122, 44, '_wp_attached_file', '2019/01/flowers-3705716_960_720.jpg'),
(123, 44, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:35:\"2019/01/flowers-3705716_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:35:\"flowers-3705716_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:35:\"flowers-3705716_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:35:\"flowers-3705716_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:3:\"6.3\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:14:\"Canon EOS 650D\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:2:\"45\";s:3:\"iso\";s:3:\"100\";s:13:\"shutter_speed\";s:5:\"0.005\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(124, 45, '_wp_attached_file', '2019/01/maple-leaves-2895335_960_720.jpg'),
(125, 45, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:40:\"2019/01/maple-leaves-2895335_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:40:\"maple-leaves-2895335_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:40:\"maple-leaves-2895335_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:40:\"maple-leaves-2895335_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:3:\"5.6\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:11:\"PENTAX K-70\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:3:\"300\";s:3:\"iso\";s:3:\"100\";s:13:\"shutter_speed\";s:5:\"0.004\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(126, 46, '_wp_attached_file', '2019/01/sunflower-3550693_960_720.jpg'),
(127, 46, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:37:\"2019/01/sunflower-3550693_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:37:\"sunflower-3550693_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:37:\"sunflower-3550693_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:37:\"sunflower-3550693_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:3:\"2.8\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:4:\"X-T2\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:2:\"35\";s:3:\"iso\";s:3:\"200\";s:13:\"shutter_speed\";s:18:\"0.0047619047619048\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(128, 47, '_wp_attached_file', '2019/01/sunflower-3623331_960_720.jpg'),
(129, 47, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:37:\"2019/01/sunflower-3623331_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:37:\"sunflower-3623331_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:37:\"sunflower-3623331_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:37:\"sunflower-3623331_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:2:\"11\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:5:\"E-M10\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:2:\"34\";s:3:\"iso\";s:3:\"200\";s:13:\"shutter_speed\";s:6:\"0.0025\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(130, 48, '_wp_attached_file', '2019/01/wheat-3506758_960_720.jpg'),
(131, 48, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:960;s:6:\"height\";i:640;s:4:\"file\";s:33:\"2019/01/wheat-3506758_960_720.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:33:\"wheat-3506758_960_720-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:33:\"wheat-3506758_960_720-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:33:\"wheat-3506758_960_720-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"2\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:4:\"X-T2\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:2:\"35\";s:3:\"iso\";s:3:\"200\";s:13:\"shutter_speed\";s:8:\"0.000125\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(132, 38, '_edit_last', '1'),
(133, 38, '_wp_page_template', 'page-pleine-largeur.php'),
(134, 50, '_menu_item_type', 'post_type'),
(135, 50, '_menu_item_menu_item_parent', '0'),
(136, 50, '_menu_item_object_id', '38'),
(137, 50, '_menu_item_object', 'page'),
(138, 50, '_menu_item_target', ''),
(139, 50, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(140, 50, '_menu_item_xfn', ''),
(141, 50, '_menu_item_url', ''),
(143, 32, '_wp_page_template', 'page-pleine-largeur.php'),
(144, 32, '_edit_last', '1'),
(145, 30, '_wp_page_template', 'trois-colonnes.php'),
(146, 30, '_edit_last', '1'),
(147, 52, '_edit_lock', '1547455516:1');

-- --------------------------------------------------------

--
-- Structure de la table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2019-01-11 09:54:53', '2019-01-11 08:54:53', '<!-- wp:paragraph -->\n<p>Bienvenue sur WordPress. Ceci est votre premier article. Modifiez où supprimez-le, puis commencez à écrire !</p>\n<!-- /wp:paragraph -->', 'Bonjour tout le monde !', '', 'publish', 'open', 'open', '', 'bonjour-tout-le-monde', '', '', '2019-01-11 09:54:53', '2019-01-11 08:54:53', '', 0, 'http://localhost/wordpress_dev/?p=1', 0, 'post', '', 1),
(2, 1, '2019-01-11 09:54:53', '2019-01-11 08:54:53', '<!-- wp:paragraph -->\n<p>Ceci est une page d’exemple. C’est différent d’un article de blog parce qu’elle restera au même endroit et apparaîtra dans la navigation de votre site (dans la plupart des thèmes). La plupart des gens commencent par une page « À propos » qui les présente aux visiteurs du site. Cela pourrait ressembler à quelque chose comme cela :</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Bonjour ! Je suis un mécanicien qui aspire à devenir acteur, et voici mon site. J’habite à Bordeaux, j’ai un super chien baptisé Russell, et j’aime la vodka-ananas (ainsi qu’être surpris par la pluie soudaine lors de longues balades sur la plage au coucher du soleil).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>... ou quelque chose comme cela :</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>La société 123 Machin Truc a été créée en 1971, et n’a cessé de proposer au public des machins-trucs de qualité depuis lors. Située à Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson, 123 Machin Truc emploie 2 000 personnes, et fabrique toutes sortes de bidules super pour la communauté bouzemontoise.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>En tant que nouvel·le utilisateur ou utilisatrice de WordPress, vous devriez vous rendre sur <a href=\"http://localhost/wordpress_dev/wp-admin/\">votre tableau de bord</a> pour supprimer cette page et créer de nouvelles pages pour votre contenu. Amusez-vous bien !</p>\n<!-- /wp:paragraph -->', 'Page d’exemple', '', 'publish', 'closed', 'open', '', 'page-d-exemple', '', '', '2019-01-11 09:54:53', '2019-01-11 08:54:53', '', 0, 'http://localhost/wordpress_dev/?page_id=2', 0, 'page', '', 0),
(3, 1, '2019-01-11 09:54:53', '2019-01-11 08:54:53', '<!-- wp:heading -->\n<h2>Qui sommes-nous&nbsp;?</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>L’adresse de notre site Web est&nbsp;: http://localhost/wordpress_dev.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Utilisation des données personnelles collectées</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Commentaires</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Quand vous laissez un commentaire sur notre site web, les données inscrites dans le formulaire de commentaire, mais aussi votre adresse IP et l’agent utilisateur de votre navigateur sont collectés pour nous aider à la détection des commentaires indésirables.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Une chaîne anonymisée créée à partir de votre adresse de messagerie (également appelée hash) peut être envoyée au service Gravatar pour vérifier si vous utilisez ce dernier. Les clauses de confidentialité du service Gravatar sont disponibles ici&nbsp;: https://automattic.com/privacy/. Après validation de votre commentaire, votre photo de profil sera visible publiquement à coté de votre commentaire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Médias</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Si vous êtes un utilisateur ou une utilisatrice enregistré·e et que vous téléversez des images sur le site web, nous vous conseillons d’éviter de téléverser des images contenant des données EXIF de coordonnées GPS. Les visiteurs de votre site web peuvent télécharger et extraire des données de localisation depuis ces images.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Formulaires de contact</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Cookies</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse de messagerie et site web dans des cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous déposez un autre commentaire plus tard. Ces cookies expirent au bout d’un an.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Si vous avez un compte et que vous vous connectez sur ce site, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer vos informations de connexion et vos préférences d’écran. La durée de vie d’un cookie de connexion est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez «&nbsp;Se souvenir de moi&nbsp;», votre cookie de connexion sera conservé pendant deux semaines. Si vous vous déconnectez de votre compte, le cookie de connexion sera effacé.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Contenu embarqué depuis d’autres sites</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Statistiques et mesures d’audience</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Utilisation et transmission de vos données personnelles</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Durées de stockage de vos données</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. Cela permet de reconnaître et approuver automatiquement les commentaires suivants au lieu de les laisser dans la file de modération.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Pour les utilisateurs et utilisatrices qui s’enregistrent sur notre site (si cela est possible), nous stockons également les données personnelles indiquées dans leur profil. Tous les utilisateurs et utilisatrices peuvent voir, modifier ou supprimer leurs informations personnelles à tout moment (à l’exception de leur nom d’utilisateur·ice). Les gestionnaires du site peuvent aussi voir et modifier ces informations.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Les droits que vous avez sur vos données</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Transmission de vos données personnelles</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Les commentaires des visiteurs peuvent être vérifiés à l’aide d’un service automatisé de détection des commentaires indésirables.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Informations de contact</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Informations supplémentaires</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Comment nous protégeons vos données</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Procédures mises en œuvre en cas de fuite de données</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Les services tiers qui nous transmettent des données</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Opérations de marketing automatisé et/ou de profilage réalisées à l’aide des données personnelles</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Affichage des informations liées aux secteurs soumis à des régulations spécifiques</h3>\n<!-- /wp:heading -->', 'Politique de confidentialité', '', 'publish', 'closed', 'open', '', 'politique-de-confidentialite', '', '', '2019-01-11 12:55:00', '2019-01-11 11:55:00', '', 0, 'http://localhost/wordpress_dev/?page_id=3', 0, 'page', '', 0),
(4, 1, '2019-01-11 09:57:18', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-01-11 09:57:18', '0000-00-00 00:00:00', '', 0, 'http://localhost/wordpress_dev/?p=4', 0, 'post', '', 0),
(5, 1, '2019-01-11 10:14:47', '2019-01-11 09:14:47', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis faucibus varius. Nulla vitae quam eget nisl elementum suscipit. Maecenas consequat augue in augue ultricies, at aliquam enim blandit. Duis in feugiat sapien, et feugiat elit. Aenean ac mollis enim, non mattis eros. Integer lectus magna, viverra ut malesuada sed, mattis sed justo. Integer justo metus, auctor id consectetur sed, fringilla ut leo. Nunc tincidunt dapibus nunc, id tincidunt felis luctus a. Mauris sollicitudin leo facilisis malesuada rhoncus. Suspendisse porta dignissim pretium. Sed magna lacus, rutrum ut orci et, lobortis aliquet nisi. Duis diam risus, venenatis et tempus vitae, tristique in lacus. Phasellus eget tincidunt sapien.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":14,\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image\"><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/prague-3010407_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/prague-3010407_960_720.jpg\" alt=\"\" class=\"wp-image-14\"/></a></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam finibus et ligula vitae porttitor. Aliquam non nulla mi. Quisque dui nunc, cursus non odio at, aliquet mollis leo. Donec sit amet sem nunc. Aenean tempus egestas sollicitudin. Pellentesque egestas turpis volutpat nisi semper, ac iaculis sapien porta. Aenean a purus mi. Morbi ut diam ante. Nullam consectetur eget orci sed viverra. Nam id facilisis arcu. Duis scelerisque nec nisi et consequat. Suspendisse tempor diam et leo cursus molestie. Aliquam porttitor sem vel sapien luctus tincidunt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Curabitur lobortis eu erat nec rhoncus. Nulla finibus condimentum eros a efficitur. Praesent ultrices efficitur leo vel tempus. Donec vel pellentesque mauris. Curabitur quis semper justo. Aenean vel mi in erat vehicula ornare vitae eget dolor. Donec vitae faucibus ex. Integer neque enim, molestie sed urna vitae, condimentum vestibulum elit. Fusce sit amet diam enim. Ut a nibh scelerisque, luctus ligula quis, efficitur odio. Nulla vel magna sem. Aenean libero augue, pretium sit amet lacinia ac, imperdiet et arcu.</p>\n<!-- /wp:paragraph -->', 'Accueil', '', 'publish', 'closed', 'closed', '', 'accueil', '', '', '2019-01-11 10:57:10', '2019-01-11 09:57:10', '', 0, 'http://localhost/wordpress_dev/?page_id=5', 0, 'page', '', 0),
(6, 1, '2019-01-11 10:14:47', '2019-01-11 09:14:47', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis faucibus varius. Nulla vitae quam eget nisl elementum suscipit. Maecenas consequat augue in augue ultricies, at aliquam enim blandit. Duis in feugiat sapien, et feugiat elit. Aenean ac mollis enim, non mattis eros. Integer lectus magna, viverra ut malesuada sed, mattis sed justo. Integer justo metus, auctor id consectetur sed, fringilla ut leo. Nunc tincidunt dapibus nunc, id tincidunt felis luctus a. Mauris sollicitudin leo facilisis malesuada rhoncus. Suspendisse porta dignissim pretium. Sed magna lacus, rutrum ut orci et, lobortis aliquet nisi. Duis diam risus, venenatis et tempus vitae, tristique in lacus. Phasellus eget tincidunt sapien.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam finibus et ligula vitae porttitor. Aliquam non nulla mi. Quisque dui nunc, cursus non odio at, aliquet mollis leo. Donec sit amet sem nunc. Aenean tempus egestas sollicitudin. Pellentesque egestas turpis volutpat nisi semper, ac iaculis sapien porta. Aenean a purus mi. Morbi ut diam ante. Nullam consectetur eget orci sed viverra. Nam id facilisis arcu. Duis scelerisque nec nisi et consequat. Suspendisse tempor diam et leo cursus molestie. Aliquam porttitor sem vel sapien luctus tincidunt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Curabitur lobortis eu erat nec rhoncus. Nulla finibus condimentum eros a efficitur. Praesent ultrices efficitur leo vel tempus. Donec vel pellentesque mauris. Curabitur quis semper justo. Aenean vel mi in erat vehicula ornare vitae eget dolor. Donec vitae faucibus ex. Integer neque enim, molestie sed urna vitae, condimentum vestibulum elit. Fusce sit amet diam enim. Ut a nibh scelerisque, luctus ligula quis, efficitur odio. Nulla vel magna sem. Aenean libero augue, pretium sit amet lacinia ac, imperdiet et arcu.</p>\n<!-- /wp:paragraph -->', 'Accueil', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2019-01-11 10:14:47', '2019-01-11 09:14:47', '', 5, 'http://localhost/wordpress_dev/2019/01/11/5-revision-v1/', 0, 'revision', '', 0),
(7, 1, '2019-01-11 10:15:12', '2019-01-11 09:15:12', '', 'Blog', '', 'publish', 'closed', 'closed', '', 'blog', '', '', '2019-01-11 10:15:12', '2019-01-11 09:15:12', '', 0, 'http://localhost/wordpress_dev/?page_id=7', 0, 'page', '', 0),
(8, 1, '2019-01-11 10:15:12', '2019-01-11 09:15:12', '', 'Blog', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2019-01-11 10:15:12', '2019-01-11 09:15:12', '', 7, 'http://localhost/wordpress_dev/2019/01/11/7-revision-v1/', 0, 'revision', '', 0),
(9, 1, '2019-01-11 10:23:26', '2019-01-11 09:23:26', '{\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:23:26\"\n    },\n    \"page_on_front\": {\n        \"value\": \"5\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:23:26\"\n    },\n    \"page_for_posts\": {\n        \"value\": \"7\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:23:26\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'ac84b69b-3850-479a-9645-15b20d4f1b63', '', '', '2019-01-11 10:23:26', '2019-01-11 09:23:26', '', 0, 'http://localhost/wordpress_dev/2019/01/11/ac84b69b-3850-479a-9645-15b20d4f1b63/', 0, 'customize_changeset', '', 0),
(10, 1, '2019-01-11 10:23:43', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2019-01-11 10:23:43', '0000-00-00 00:00:00', '', 0, 'http://localhost/wordpress_dev/?page_id=10', 0, 'page', '', 0),
(11, 1, '2019-01-11 10:26:53', '2019-01-11 09:26:53', '{\n    \"blogdescription\": {\n        \"value\": \"Un cours wordpress\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:25:37\"\n    },\n    \"site_icon\": {\n        \"value\": 12,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:26:53\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'c7f1f285-b418-400a-83e4-f3dacc2c479a', '', '', '2019-01-11 10:26:53', '2019-01-11 09:26:53', '', 0, 'http://localhost/wordpress_dev/?p=11', 0, 'customize_changeset', '', 0),
(12, 1, '2019-01-11 10:26:47', '2019-01-11 09:26:47', '', 'logo', '', 'inherit', 'open', 'closed', '', 'logo', '', '', '2019-01-11 10:26:47', '2019-01-11 09:26:47', '', 0, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/logo.png', 0, 'attachment', 'image/png', 0),
(13, 1, '2019-01-11 10:34:56', '2019-01-11 09:34:56', '{\n    \"twentysixteen::background_color\": {\n        \"value\": \"#1a1a1a\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:29:32\"\n    },\n    \"twentysixteen::color_scheme\": {\n        \"value\": \"default\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:29:32\"\n    },\n    \"twentysixteen::page_background_color\": {\n        \"value\": \"#ffffff\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:29:32\"\n    },\n    \"twentysixteen::link_color\": {\n        \"value\": \"#007acc\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:29:32\"\n    },\n    \"twentysixteen::main_text_color\": {\n        \"value\": \"#1a1a1a\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:29:32\"\n    },\n    \"twentysixteen::secondary_text_color\": {\n        \"value\": \"#686868\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:29:32\"\n    },\n    \"twentysixteen::header_image\": {\n        \"value\": \"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720.jpg\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:34:56\"\n    },\n    \"twentysixteen::header_image_data\": {\n        \"value\": {\n            \"url\": \"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720.jpg\",\n            \"thumbnail_url\": \"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720.jpg\",\n            \"timestamp\": 1547199289159,\n            \"attachment_id\": 17,\n            \"width\": 1200,\n            \"height\": 303\n        },\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 09:34:56\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '3f7d864f-80a5-44ec-9da9-ef37e3e0cdee', '', '', '2019-01-11 10:34:56', '2019-01-11 09:34:56', '', 0, 'http://localhost/wordpress_dev/?p=13', 0, 'customize_changeset', '', 0),
(14, 1, '2019-01-11 10:33:05', '2019-01-11 09:33:05', '', 'prague-3010407_960_720', '', 'inherit', 'open', 'closed', '', 'prague-3010407_960_720', '', '', '2019-01-11 10:33:05', '2019-01-11 09:33:05', '', 0, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/prague-3010407_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(15, 1, '2019-01-11 10:33:34', '2019-01-11 09:33:34', '', 'cropped-prague-3010407_960_720.jpg', '', 'inherit', 'open', 'closed', '', 'cropped-prague-3010407_960_720-jpg', '', '', '2019-01-11 10:33:34', '2019-01-11 09:33:34', '', 0, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-prague-3010407_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(16, 1, '2019-01-11 10:34:44', '2019-01-11 09:34:44', '', 'autumn-83761_960_720', '', 'inherit', 'open', 'closed', '', 'autumn-83761_960_720', '', '', '2019-01-11 10:34:44', '2019-01-11 09:34:44', '', 0, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-83761_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(17, 1, '2019-01-11 10:34:48', '2019-01-11 09:34:48', '', 'cropped-autumn-83761_960_720.jpg', '', 'inherit', 'open', 'closed', '', 'cropped-autumn-83761_960_720-jpg', '', '', '2019-01-11 10:34:48', '2019-01-11 09:34:48', '', 0, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(18, 1, '2019-01-11 10:47:11', '2019-01-11 09:47:11', '<label> Votre nom (obligatoire)\n    [text* your-name] </label>\n\n<label> Votre adresse de messagerie (obligatoire)\n    [email* your-email] </label>\n\n<label> Objet\n    [text your-subject] </label>\n\n<label> Votre message\n    [textarea your-message] </label>\n\n[submit \"Envoyer\"]\nMonSite \"[your-subject]\"\nMonSite <mathieuquittard@evogue.fr>\nDe : [your-name] <[your-email]>\nObjet : [your-subject]\n\nCorps du message :\n[your-message]\n\n-- \nCet e-mail a été envoyé via le formulaire de contact de MonSite (http://localhost/wordpress_dev)\nmathieuquittard@evogue.fr\nReply-To: [your-email]\n\n0\n0\n\nMonSite \"[your-subject]\"\nMonSite <mathieuquittard@evogue.fr>\nCorps du message :\n[your-message]\n\n-- \nCet e-mail a été envoyé via le formulaire de contact de MonSite (http://localhost/wordpress_dev)\n[your-email]\nReply-To: mathieuquittard@evogue.fr\n\n0\n0\nMerci pour votre message. Il a été envoyé.\nUne erreur s’est produite lors de l’envoi de votre message. Veuillez essayer à nouveau plus tard.\nUn ou plusieurs champs contiennent une erreur. Veuillez vérifier et essayer à nouveau.\nUne erreur s’est produite lors de l’envoi de votre message. Veuillez essayer à nouveau plus tard.\nVous devez accepter les termes et conditions avant d’envoyer votre message.\nCe champ est obligatoire.\nLe champ est trop long.\nLe champ est trop court.', 'Formulaire de contact 1', '', 'publish', 'closed', 'closed', '', 'formulaire-de-contact-1', '', '', '2019-01-11 10:47:11', '2019-01-11 09:47:11', '', 0, 'http://localhost/wordpress_dev/?post_type=wpcf7_contact_form&p=18', 0, 'wpcf7_contact_form', '', 0),
(19, 1, '2019-01-11 10:49:15', '2019-01-11 09:49:15', '<!-- wp:shortcode -->\n[contact-form-7 id=\"18\" title=\"Formulaire de contact 1\"]\n<!-- /wp:shortcode -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Contact', '', 'publish', 'closed', 'closed', '', 'contact', '', '', '2019-01-11 10:49:15', '2019-01-11 09:49:15', '', 0, 'http://localhost/wordpress_dev/?page_id=19', 0, 'page', '', 0),
(20, 1, '2019-01-11 10:49:15', '2019-01-11 09:49:15', '<!-- wp:shortcode -->\n[contact-form-7 id=\"18\" title=\"Formulaire de contact 1\"]\n<!-- /wp:shortcode -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Contact', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2019-01-11 10:49:15', '2019-01-11 09:49:15', '', 19, 'http://localhost/wordpress_dev/2019/01/11/19-revision-v1/', 0, 'revision', '', 0),
(21, 1, '2019-01-11 10:52:22', '2019-01-11 09:52:22', ' ', '', '', 'publish', 'closed', 'closed', '', '21', '', '', '2019-01-11 16:34:28', '2019-01-11 15:34:28', '', 0, 'http://localhost/wordpress_dev/?p=21', 4, 'nav_menu_item', '', 0),
(22, 1, '2019-01-11 10:52:22', '2019-01-11 09:52:22', ' ', '', '', 'publish', 'closed', 'closed', '', '22', '', '', '2019-01-11 16:34:28', '2019-01-11 15:34:28', '', 0, 'http://localhost/wordpress_dev/?p=22', 2, 'nav_menu_item', '', 0),
(23, 1, '2019-01-11 10:52:22', '2019-01-11 09:52:22', ' ', '', '', 'publish', 'closed', 'closed', '', '23', '', '', '2019-01-11 16:34:28', '2019-01-11 15:34:28', '', 0, 'http://localhost/wordpress_dev/?p=23', 1, 'nav_menu_item', '', 0),
(24, 1, '2019-01-11 10:57:02', '2019-01-11 09:57:02', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis faucibus varius. Nulla vitae quam eget nisl elementum suscipit. Maecenas consequat augue in augue ultricies, at aliquam enim blandit. Duis in feugiat sapien, et feugiat elit. Aenean ac mollis enim, non mattis eros. Integer lectus magna, viverra ut malesuada sed, mattis sed justo. Integer justo metus, auctor id consectetur sed, fringilla ut leo. Nunc tincidunt dapibus nunc, id tincidunt felis luctus a. Mauris sollicitudin leo facilisis malesuada rhoncus. Suspendisse porta dignissim pretium. Sed magna lacus, rutrum ut orci et, lobortis aliquet nisi. Duis diam risus, venenatis et tempus vitae, tristique in lacus. Phasellus eget tincidunt sapien.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":14} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/prague-3010407_960_720.jpg\" alt=\"\" class=\"wp-image-14\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam finibus et ligula vitae porttitor. Aliquam non nulla mi. Quisque dui nunc, cursus non odio at, aliquet mollis leo. Donec sit amet sem nunc. Aenean tempus egestas sollicitudin. Pellentesque egestas turpis volutpat nisi semper, ac iaculis sapien porta. Aenean a purus mi. Morbi ut diam ante. Nullam consectetur eget orci sed viverra. Nam id facilisis arcu. Duis scelerisque nec nisi et consequat. Suspendisse tempor diam et leo cursus molestie. Aliquam porttitor sem vel sapien luctus tincidunt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Curabitur lobortis eu erat nec rhoncus. Nulla finibus condimentum eros a efficitur. Praesent ultrices efficitur leo vel tempus. Donec vel pellentesque mauris. Curabitur quis semper justo. Aenean vel mi in erat vehicula ornare vitae eget dolor. Donec vitae faucibus ex. Integer neque enim, molestie sed urna vitae, condimentum vestibulum elit. Fusce sit amet diam enim. Ut a nibh scelerisque, luctus ligula quis, efficitur odio. Nulla vel magna sem. Aenean libero augue, pretium sit amet lacinia ac, imperdiet et arcu.</p>\n<!-- /wp:paragraph -->', 'Accueil', '', 'inherit', 'closed', 'closed', '', '5-autosave-v1', '', '', '2019-01-11 10:57:02', '2019-01-11 09:57:02', '', 5, 'http://localhost/wordpress_dev/2019/01/11/5-autosave-v1/', 0, 'revision', '', 0),
(25, 1, '2019-01-11 10:57:10', '2019-01-11 09:57:10', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis faucibus varius. Nulla vitae quam eget nisl elementum suscipit. Maecenas consequat augue in augue ultricies, at aliquam enim blandit. Duis in feugiat sapien, et feugiat elit. Aenean ac mollis enim, non mattis eros. Integer lectus magna, viverra ut malesuada sed, mattis sed justo. Integer justo metus, auctor id consectetur sed, fringilla ut leo. Nunc tincidunt dapibus nunc, id tincidunt felis luctus a. Mauris sollicitudin leo facilisis malesuada rhoncus. Suspendisse porta dignissim pretium. Sed magna lacus, rutrum ut orci et, lobortis aliquet nisi. Duis diam risus, venenatis et tempus vitae, tristique in lacus. Phasellus eget tincidunt sapien.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":14,\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image\"><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/prague-3010407_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/prague-3010407_960_720.jpg\" alt=\"\" class=\"wp-image-14\"/></a></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam finibus et ligula vitae porttitor. Aliquam non nulla mi. Quisque dui nunc, cursus non odio at, aliquet mollis leo. Donec sit amet sem nunc. Aenean tempus egestas sollicitudin. Pellentesque egestas turpis volutpat nisi semper, ac iaculis sapien porta. Aenean a purus mi. Morbi ut diam ante. Nullam consectetur eget orci sed viverra. Nam id facilisis arcu. Duis scelerisque nec nisi et consequat. Suspendisse tempor diam et leo cursus molestie. Aliquam porttitor sem vel sapien luctus tincidunt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Curabitur lobortis eu erat nec rhoncus. Nulla finibus condimentum eros a efficitur. Praesent ultrices efficitur leo vel tempus. Donec vel pellentesque mauris. Curabitur quis semper justo. Aenean vel mi in erat vehicula ornare vitae eget dolor. Donec vitae faucibus ex. Integer neque enim, molestie sed urna vitae, condimentum vestibulum elit. Fusce sit amet diam enim. Ut a nibh scelerisque, luctus ligula quis, efficitur odio. Nulla vel magna sem. Aenean libero augue, pretium sit amet lacinia ac, imperdiet et arcu.</p>\n<!-- /wp:paragraph -->', 'Accueil', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2019-01-11 10:57:10', '2019-01-11 09:57:10', '', 5, 'http://localhost/wordpress_dev/2019/01/11/5-revision-v1/', 0, 'revision', '', 0),
(26, 1, '2019-01-11 11:32:18', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2019-01-11 11:32:18', '0000-00-00 00:00:00', '', 0, 'http://localhost/wordpress_dev/?page_id=26', 0, 'page', '', 0),
(27, 1, '2019-01-11 12:10:00', '2019-01-11 11:10:00', '', 'cropped-autumn-83761_960_720-1.jpg', '', 'inherit', 'open', 'closed', '', 'cropped-autumn-83761_960_720-1-jpg', '', '', '2019-01-11 12:10:00', '2019-01-11 11:10:00', '', 0, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(28, 1, '2019-01-11 12:10:03', '2019-01-11 11:10:03', '{\n    \"twentysixteen-child::header_image\": {\n        \"value\": \"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720-1.jpg\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 11:10:03\"\n    },\n    \"twentysixteen-child::header_image_data\": {\n        \"value\": {\n            \"url\": \"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720-1.jpg\",\n            \"thumbnail_url\": \"http://localhost/wordpress_dev/wp-content/uploads/2019/01/cropped-autumn-83761_960_720-1.jpg\",\n            \"timestamp\": 1547205000675,\n            \"attachment_id\": 27,\n            \"width\": 1200,\n            \"height\": 280\n        },\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-01-11 11:10:03\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '2d6c7633-5e83-442f-aac9-2897800e361f', '', '', '2019-01-11 12:10:03', '2019-01-11 11:10:03', '', 0, 'http://localhost/wordpress_dev/2019/01/11/2d6c7633-5e83-442f-aac9-2897800e361f/', 0, 'customize_changeset', '', 0),
(29, 1, '2019-01-11 12:55:00', '2019-01-11 11:55:00', '<!-- wp:heading -->\n<h2>Qui sommes-nous&nbsp;?</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>L’adresse de notre site Web est&nbsp;: http://localhost/wordpress_dev.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Utilisation des données personnelles collectées</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Commentaires</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Quand vous laissez un commentaire sur notre site web, les données inscrites dans le formulaire de commentaire, mais aussi votre adresse IP et l’agent utilisateur de votre navigateur sont collectés pour nous aider à la détection des commentaires indésirables.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Une chaîne anonymisée créée à partir de votre adresse de messagerie (également appelée hash) peut être envoyée au service Gravatar pour vérifier si vous utilisez ce dernier. Les clauses de confidentialité du service Gravatar sont disponibles ici&nbsp;: https://automattic.com/privacy/. Après validation de votre commentaire, votre photo de profil sera visible publiquement à coté de votre commentaire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Médias</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Si vous êtes un utilisateur ou une utilisatrice enregistré·e et que vous téléversez des images sur le site web, nous vous conseillons d’éviter de téléverser des images contenant des données EXIF de coordonnées GPS. Les visiteurs de votre site web peuvent télécharger et extraire des données de localisation depuis ces images.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Formulaires de contact</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Cookies</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse de messagerie et site web dans des cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous déposez un autre commentaire plus tard. Ces cookies expirent au bout d’un an.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Si vous avez un compte et que vous vous connectez sur ce site, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer vos informations de connexion et vos préférences d’écran. La durée de vie d’un cookie de connexion est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez «&nbsp;Se souvenir de moi&nbsp;», votre cookie de connexion sera conservé pendant deux semaines. Si vous vous déconnectez de votre compte, le cookie de connexion sera effacé.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Contenu embarqué depuis d’autres sites</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Statistiques et mesures d’audience</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Utilisation et transmission de vos données personnelles</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Durées de stockage de vos données</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. Cela permet de reconnaître et approuver automatiquement les commentaires suivants au lieu de les laisser dans la file de modération.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Pour les utilisateurs et utilisatrices qui s’enregistrent sur notre site (si cela est possible), nous stockons également les données personnelles indiquées dans leur profil. Tous les utilisateurs et utilisatrices peuvent voir, modifier ou supprimer leurs informations personnelles à tout moment (à l’exception de leur nom d’utilisateur·ice). Les gestionnaires du site peuvent aussi voir et modifier ces informations.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Les droits que vous avez sur vos données</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Transmission de vos données personnelles</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Les commentaires des visiteurs peuvent être vérifiés à l’aide d’un service automatisé de détection des commentaires indésirables.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Informations de contact</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Informations supplémentaires</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Comment nous protégeons vos données</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Procédures mises en œuvre en cas de fuite de données</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Les services tiers qui nous transmettent des données</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Opérations de marketing automatisé et/ou de profilage réalisées à l’aide des données personnelles</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Affichage des informations liées aux secteurs soumis à des régulations spécifiques</h3>\n<!-- /wp:heading -->', 'Politique de confidentialité', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2019-01-11 12:55:00', '2019-01-11 11:55:00', '', 3, 'http://localhost/wordpress_dev/2019/01/11/3-revision-v1/', 0, 'revision', '', 0),
(30, 1, '2019-01-11 12:55:32', '2019-01-11 11:55:32', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis faucibus varius. Nulla vitae quam eget nisl elementum suscipit. Maecenas consequat augue in augue ultricies, at aliquam enim blandit. Duis in feugiat sapien, et feugiat elit. Aenean ac mollis enim, non mattis eros. Integer lectus magna, viverra ut malesuada sed, mattis sed justo. Integer justo metus, auctor id consectetur sed, fringilla ut leo. Nunc tincidunt dapibus nunc, id tincidunt felis luctus a. Mauris sollicitudin leo facilisis malesuada rhoncus. Suspendisse porta dignissim pretium. Sed magna lacus, rutrum ut orci et, lobortis aliquet nisi. Duis diam risus, venenatis et tempus vitae, tristique in lacus. Phasellus eget tincidunt sapien.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam finibus et ligula vitae porttitor. Aliquam non nulla mi. Quisque dui nunc, cursus non odio at, aliquet mollis leo. Donec sit amet sem nunc. Aenean tempus egestas sollicitudin. Pellentesque egestas turpis volutpat nisi semper, ac iaculis sapien porta. Aenean a purus mi. Morbi ut diam ante. Nullam consectetur eget orci sed viverra. Nam id facilisis arcu. Duis scelerisque nec nisi et consequat. Suspendisse tempor diam et leo cursus molestie. Aliquam porttitor sem vel sapien luctus tincidunt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Curabitur lobortis eu erat nec rhoncus. Nulla finibus condimentum eros a efficitur. Praesent ultrices efficitur leo vel tempus. Donec vel pellentesque mauris. Curabitur quis semper justo. Aenean vel mi in erat vehicula ornare vitae eget dolor. Donec vitae faucibus ex. Integer neque enim, molestie sed urna vitae, condimentum vestibulum elit. Fusce sit amet diam enim. Ut a nibh scelerisque, luctus ligula quis, efficitur odio. Nulla vel magna sem. Aenean libero augue, pretium sit amet lacinia ac, imperdiet et arcu.</p>\n<!-- /wp:paragraph -->', 'Qui sommes nous ?', '', 'publish', 'closed', 'closed', '', 'qui-sommes-nous', '', '', '2019-01-11 17:17:19', '2019-01-11 16:17:19', '', 0, 'http://localhost/wordpress_dev/?page_id=30', 0, 'page', '', 0),
(31, 1, '2019-01-11 12:55:32', '2019-01-11 11:55:32', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis faucibus varius. Nulla vitae quam eget nisl elementum suscipit. Maecenas consequat augue in augue ultricies, at aliquam enim blandit. Duis in feugiat sapien, et feugiat elit. Aenean ac mollis enim, non mattis eros. Integer lectus magna, viverra ut malesuada sed, mattis sed justo. Integer justo metus, auctor id consectetur sed, fringilla ut leo. Nunc tincidunt dapibus nunc, id tincidunt felis luctus a. Mauris sollicitudin leo facilisis malesuada rhoncus. Suspendisse porta dignissim pretium. Sed magna lacus, rutrum ut orci et, lobortis aliquet nisi. Duis diam risus, venenatis et tempus vitae, tristique in lacus. Phasellus eget tincidunt sapien.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam finibus et ligula vitae porttitor. Aliquam non nulla mi. Quisque dui nunc, cursus non odio at, aliquet mollis leo. Donec sit amet sem nunc. Aenean tempus egestas sollicitudin. Pellentesque egestas turpis volutpat nisi semper, ac iaculis sapien porta. Aenean a purus mi. Morbi ut diam ante. Nullam consectetur eget orci sed viverra. Nam id facilisis arcu. Duis scelerisque nec nisi et consequat. Suspendisse tempor diam et leo cursus molestie. Aliquam porttitor sem vel sapien luctus tincidunt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Curabitur lobortis eu erat nec rhoncus. Nulla finibus condimentum eros a efficitur. Praesent ultrices efficitur leo vel tempus. Donec vel pellentesque mauris. Curabitur quis semper justo. Aenean vel mi in erat vehicula ornare vitae eget dolor. Donec vitae faucibus ex. Integer neque enim, molestie sed urna vitae, condimentum vestibulum elit. Fusce sit amet diam enim. Ut a nibh scelerisque, luctus ligula quis, efficitur odio. Nulla vel magna sem. Aenean libero augue, pretium sit amet lacinia ac, imperdiet et arcu.</p>\n<!-- /wp:paragraph -->', 'Qui sommes nous ?', '', 'inherit', 'closed', 'closed', '', '30-revision-v1', '', '', '2019-01-11 12:55:32', '2019-01-11 11:55:32', '', 30, 'http://localhost/wordpress_dev/2019/01/11/30-revision-v1/', 0, 'revision', '', 0),
(32, 1, '2019-01-11 12:55:45', '2019-01-11 11:55:45', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis faucibus varius. Nulla vitae quam eget nisl elementum suscipit. Maecenas consequat augue in augue ultricies, at aliquam enim blandit. Duis in feugiat sapien, et feugiat elit. Aenean ac mollis enim, non mattis eros. Integer lectus magna, viverra ut malesuada sed, mattis sed justo. Integer justo metus, auctor id consectetur sed, fringilla ut leo. Nunc tincidunt dapibus nunc, id tincidunt felis luctus a. Mauris sollicitudin leo facilisis malesuada rhoncus. Suspendisse porta dignissim pretium. Sed magna lacus, rutrum ut orci et, lobortis aliquet nisi. Duis diam risus, venenatis et tempus vitae, tristique in lacus. Phasellus eget tincidunt sapien.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam finibus et ligula vitae porttitor. Aliquam non nulla mi. Quisque dui nunc, cursus non odio at, aliquet mollis leo. Donec sit amet sem nunc. Aenean tempus egestas sollicitudin. Pellentesque egestas turpis volutpat nisi semper, ac iaculis sapien porta. Aenean a purus mi. Morbi ut diam ante. Nullam consectetur eget orci sed viverra. Nam id facilisis arcu. Duis scelerisque nec nisi et consequat. Suspendisse tempor diam et leo cursus molestie. Aliquam porttitor sem vel sapien luctus tincidunt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Curabitur lobortis eu erat nec rhoncus. Nulla finibus condimentum eros a efficitur. Praesent ultrices efficitur leo vel tempus. Donec vel pellentesque mauris. Curabitur quis semper justo. Aenean vel mi in erat vehicula ornare vitae eget dolor. Donec vitae faucibus ex. Integer neque enim, molestie sed urna vitae, condimentum vestibulum elit. Fusce sit amet diam enim. Ut a nibh scelerisque, luctus ligula quis, efficitur odio. Nulla vel magna sem. Aenean libero augue, pretium sit amet lacinia ac, imperdiet et arcu.</p>\n<!-- /wp:paragraph -->', 'Mentions légales', '', 'publish', 'closed', 'closed', '', 'mentions-legales', '', '', '2019-01-11 16:44:34', '2019-01-11 15:44:34', '', 0, 'http://localhost/wordpress_dev/?page_id=32', 0, 'page', '', 0),
(33, 1, '2019-01-11 12:55:45', '2019-01-11 11:55:45', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis faucibus varius. Nulla vitae quam eget nisl elementum suscipit. Maecenas consequat augue in augue ultricies, at aliquam enim blandit. Duis in feugiat sapien, et feugiat elit. Aenean ac mollis enim, non mattis eros. Integer lectus magna, viverra ut malesuada sed, mattis sed justo. Integer justo metus, auctor id consectetur sed, fringilla ut leo. Nunc tincidunt dapibus nunc, id tincidunt felis luctus a. Mauris sollicitudin leo facilisis malesuada rhoncus. Suspendisse porta dignissim pretium. Sed magna lacus, rutrum ut orci et, lobortis aliquet nisi. Duis diam risus, venenatis et tempus vitae, tristique in lacus. Phasellus eget tincidunt sapien.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam finibus et ligula vitae porttitor. Aliquam non nulla mi. Quisque dui nunc, cursus non odio at, aliquet mollis leo. Donec sit amet sem nunc. Aenean tempus egestas sollicitudin. Pellentesque egestas turpis volutpat nisi semper, ac iaculis sapien porta. Aenean a purus mi. Morbi ut diam ante. Nullam consectetur eget orci sed viverra. Nam id facilisis arcu. Duis scelerisque nec nisi et consequat. Suspendisse tempor diam et leo cursus molestie. Aliquam porttitor sem vel sapien luctus tincidunt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Curabitur lobortis eu erat nec rhoncus. Nulla finibus condimentum eros a efficitur. Praesent ultrices efficitur leo vel tempus. Donec vel pellentesque mauris. Curabitur quis semper justo. Aenean vel mi in erat vehicula ornare vitae eget dolor. Donec vitae faucibus ex. Integer neque enim, molestie sed urna vitae, condimentum vestibulum elit. Fusce sit amet diam enim. Ut a nibh scelerisque, luctus ligula quis, efficitur odio. Nulla vel magna sem. Aenean libero augue, pretium sit amet lacinia ac, imperdiet et arcu.</p>\n<!-- /wp:paragraph -->', 'Mentions légales', '', 'inherit', 'closed', 'closed', '', '32-revision-v1', '', '', '2019-01-11 12:55:45', '2019-01-11 11:55:45', '', 32, 'http://localhost/wordpress_dev/2019/01/11/32-revision-v1/', 0, 'revision', '', 0),
(34, 1, '2019-01-11 12:56:54', '2019-01-11 11:56:54', ' ', '', '', 'publish', 'closed', 'closed', '', '34', '', '', '2019-01-11 12:56:54', '2019-01-11 11:56:54', '', 0, 'http://localhost/wordpress_dev/?p=34', 4, 'nav_menu_item', '', 0),
(35, 1, '2019-01-11 12:56:54', '2019-01-11 11:56:54', ' ', '', '', 'publish', 'closed', 'closed', '', '35', '', '', '2019-01-11 12:56:54', '2019-01-11 11:56:54', '', 0, 'http://localhost/wordpress_dev/?p=35', 2, 'nav_menu_item', '', 0),
(36, 1, '2019-01-11 12:56:54', '2019-01-11 11:56:54', ' ', '', '', 'publish', 'closed', 'closed', '', '36', '', '', '2019-01-11 12:56:54', '2019-01-11 11:56:54', '', 0, 'http://localhost/wordpress_dev/?p=36', 1, 'nav_menu_item', '', 0),
(37, 1, '2019-01-11 12:56:54', '2019-01-11 11:56:54', ' ', '', '', 'publish', 'closed', 'closed', '', '37', '', '', '2019-01-11 12:56:54', '2019-01-11 11:56:54', '', 0, 'http://localhost/wordpress_dev/?p=37', 3, 'nav_menu_item', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(38, 1, '2019-01-11 16:22:39', '2019-01-11 15:22:39', '<!-- wp:gallery {\"ids\":[39,40,41,42,43,44,45,46,47,48],\"columns\":3,\"linkTo\":\"media\"} -->\n<ul class=\"wp-block-gallery columns-3 is-cropped\"><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/abstract-21118_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/abstract-21118_960_720.jpg\" alt=\"\" data-id=\"39\" data-link=\"http://localhost/wordpress_dev/?attachment_id=39\" class=\"wp-image-39\"/></a><figcaption>Légande 1</figcaption></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-83761_960_720-1.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-83761_960_720-1.jpg\" alt=\"\" data-id=\"40\" data-link=\"http://localhost/wordpress_dev/?attachment_id=40\" class=\"wp-image-40\"/></a><figcaption>Légende 2</figcaption></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-3804001_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-3804001_960_720.jpg\" alt=\"\" data-id=\"41\" data-link=\"http://localhost/wordpress_dev/?attachment_id=41\" class=\"wp-image-41\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-leaf-3881675_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-leaf-3881675_960_720.jpg\" alt=\"\" data-id=\"42\" data-link=\"http://localhost/wordpress_dev/?attachment_id=42\" class=\"wp-image-42\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/fall-foliage-3705550_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/fall-foliage-3705550_960_720.jpg\" alt=\"\" data-id=\"43\" data-link=\"http://localhost/wordpress_dev/?attachment_id=43\" class=\"wp-image-43\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/flowers-3705716_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/flowers-3705716_960_720.jpg\" alt=\"\" data-id=\"44\" data-link=\"http://localhost/wordpress_dev/?attachment_id=44\" class=\"wp-image-44\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/maple-leaves-2895335_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/maple-leaves-2895335_960_720.jpg\" alt=\"\" data-id=\"45\" data-link=\"http://localhost/wordpress_dev/?attachment_id=45\" class=\"wp-image-45\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3550693_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3550693_960_720.jpg\" alt=\"\" data-id=\"46\" data-link=\"http://localhost/wordpress_dev/?attachment_id=46\" class=\"wp-image-46\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3623331_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3623331_960_720.jpg\" alt=\"\" data-id=\"47\" data-link=\"http://localhost/wordpress_dev/?attachment_id=47\" class=\"wp-image-47\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/wheat-3506758_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/wheat-3506758_960_720.jpg\" alt=\"\" data-id=\"48\" data-link=\"http://localhost/wordpress_dev/?attachment_id=48\" class=\"wp-image-48\"/></a></figure></li></ul>\n<!-- /wp:gallery -->', 'Galerie', '', 'publish', 'closed', 'closed', '', 'galerie', '', '', '2019-01-11 16:46:41', '2019-01-11 15:46:41', '', 0, 'http://localhost/wordpress_dev/?page_id=38', 0, 'page', '', 0),
(39, 1, '2019-01-11 16:19:59', '2019-01-11 15:19:59', '', 'abstract-21118_960_720', 'Légande 1', 'inherit', 'open', 'closed', '', 'abstract-21118_960_720', '', '', '2019-01-11 16:20:49', '2019-01-11 15:20:49', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/abstract-21118_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(40, 1, '2019-01-11 16:19:59', '2019-01-11 15:19:59', '', 'autumn-83761_960_720 (1)', 'Légende 2', 'inherit', 'open', 'closed', '', 'autumn-83761_960_720-1', '', '', '2019-01-11 16:20:52', '2019-01-11 15:20:52', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-83761_960_720-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(41, 1, '2019-01-11 16:20:00', '2019-01-11 15:20:00', '', 'autumn-3804001_960_720', '', 'inherit', 'open', 'closed', '', 'autumn-3804001_960_720', '', '', '2019-01-11 16:20:00', '2019-01-11 15:20:00', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-3804001_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(42, 1, '2019-01-11 16:20:00', '2019-01-11 15:20:00', '', 'autumn-leaf-3881675_960_720', '', 'inherit', 'open', 'closed', '', 'autumn-leaf-3881675_960_720', '', '', '2019-01-11 16:20:00', '2019-01-11 15:20:00', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-leaf-3881675_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(43, 1, '2019-01-11 16:20:01', '2019-01-11 15:20:01', '', 'fall-foliage-3705550_960_720', '', 'inherit', 'open', 'closed', '', 'fall-foliage-3705550_960_720', '', '', '2019-01-11 16:20:01', '2019-01-11 15:20:01', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/fall-foliage-3705550_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(44, 1, '2019-01-11 16:20:02', '2019-01-11 15:20:02', '', 'flowers-3705716_960_720', '', 'inherit', 'open', 'closed', '', 'flowers-3705716_960_720', '', '', '2019-01-11 16:20:02', '2019-01-11 15:20:02', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/flowers-3705716_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(45, 1, '2019-01-11 16:20:02', '2019-01-11 15:20:02', '', 'maple-leaves-2895335_960_720', '', 'inherit', 'open', 'closed', '', 'maple-leaves-2895335_960_720', '', '', '2019-01-11 16:20:02', '2019-01-11 15:20:02', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/maple-leaves-2895335_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(46, 1, '2019-01-11 16:20:03', '2019-01-11 15:20:03', '', 'sunflower-3550693_960_720', '', 'inherit', 'open', 'closed', '', 'sunflower-3550693_960_720', '', '', '2019-01-11 16:20:03', '2019-01-11 15:20:03', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3550693_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(47, 1, '2019-01-11 16:20:04', '2019-01-11 15:20:04', '', 'sunflower-3623331_960_720', '', 'inherit', 'open', 'closed', '', 'sunflower-3623331_960_720', '', '', '2019-01-11 16:20:04', '2019-01-11 15:20:04', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3623331_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(48, 1, '2019-01-11 16:20:04', '2019-01-11 15:20:04', '', 'wheat-3506758_960_720', '', 'inherit', 'open', 'closed', '', 'wheat-3506758_960_720', '', '', '2019-01-11 16:20:04', '2019-01-11 15:20:04', '', 38, 'http://localhost/wordpress_dev/wp-content/uploads/2019/01/wheat-3506758_960_720.jpg', 0, 'attachment', 'image/jpeg', 0),
(49, 1, '2019-01-11 16:22:39', '2019-01-11 15:22:39', '<!-- wp:gallery {\"ids\":[39,40,41,42,43,44,45,46,47,48],\"columns\":2,\"linkTo\":\"media\"} -->\n<ul class=\"wp-block-gallery columns-2 is-cropped\"><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/abstract-21118_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/abstract-21118_960_720.jpg\" alt=\"\" data-id=\"39\" data-link=\"http://localhost/wordpress_dev/?attachment_id=39\" class=\"wp-image-39\"/></a><figcaption>Légande 1</figcaption></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-83761_960_720-1.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-83761_960_720-1.jpg\" alt=\"\" data-id=\"40\" data-link=\"http://localhost/wordpress_dev/?attachment_id=40\" class=\"wp-image-40\"/></a><figcaption>Légende 2</figcaption></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-3804001_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-3804001_960_720.jpg\" alt=\"\" data-id=\"41\" data-link=\"http://localhost/wordpress_dev/?attachment_id=41\" class=\"wp-image-41\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-leaf-3881675_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-leaf-3881675_960_720.jpg\" alt=\"\" data-id=\"42\" data-link=\"http://localhost/wordpress_dev/?attachment_id=42\" class=\"wp-image-42\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/fall-foliage-3705550_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/fall-foliage-3705550_960_720.jpg\" alt=\"\" data-id=\"43\" data-link=\"http://localhost/wordpress_dev/?attachment_id=43\" class=\"wp-image-43\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/flowers-3705716_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/flowers-3705716_960_720.jpg\" alt=\"\" data-id=\"44\" data-link=\"http://localhost/wordpress_dev/?attachment_id=44\" class=\"wp-image-44\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/maple-leaves-2895335_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/maple-leaves-2895335_960_720.jpg\" alt=\"\" data-id=\"45\" data-link=\"http://localhost/wordpress_dev/?attachment_id=45\" class=\"wp-image-45\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3550693_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3550693_960_720.jpg\" alt=\"\" data-id=\"46\" data-link=\"http://localhost/wordpress_dev/?attachment_id=46\" class=\"wp-image-46\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3623331_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3623331_960_720.jpg\" alt=\"\" data-id=\"47\" data-link=\"http://localhost/wordpress_dev/?attachment_id=47\" class=\"wp-image-47\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/wheat-3506758_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/wheat-3506758_960_720.jpg\" alt=\"\" data-id=\"48\" data-link=\"http://localhost/wordpress_dev/?attachment_id=48\" class=\"wp-image-48\"/></a></figure></li></ul>\n<!-- /wp:gallery -->', 'Galerie', '', 'inherit', 'closed', 'closed', '', '38-revision-v1', '', '', '2019-01-11 16:22:39', '2019-01-11 15:22:39', '', 38, 'http://localhost/wordpress_dev/2019/01/11/38-revision-v1/', 0, 'revision', '', 0),
(50, 1, '2019-01-11 16:34:28', '2019-01-11 15:34:28', ' ', '', '', 'publish', 'closed', 'closed', '', '50', '', '', '2019-01-11 16:34:28', '2019-01-11 15:34:28', '', 0, 'http://localhost/wordpress_dev/?p=50', 3, 'nav_menu_item', '', 0),
(51, 1, '2019-01-11 16:46:41', '2019-01-11 15:46:41', '<!-- wp:gallery {\"ids\":[39,40,41,42,43,44,45,46,47,48],\"columns\":3,\"linkTo\":\"media\"} -->\n<ul class=\"wp-block-gallery columns-3 is-cropped\"><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/abstract-21118_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/abstract-21118_960_720.jpg\" alt=\"\" data-id=\"39\" data-link=\"http://localhost/wordpress_dev/?attachment_id=39\" class=\"wp-image-39\"/></a><figcaption>Légande 1</figcaption></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-83761_960_720-1.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-83761_960_720-1.jpg\" alt=\"\" data-id=\"40\" data-link=\"http://localhost/wordpress_dev/?attachment_id=40\" class=\"wp-image-40\"/></a><figcaption>Légende 2</figcaption></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-3804001_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-3804001_960_720.jpg\" alt=\"\" data-id=\"41\" data-link=\"http://localhost/wordpress_dev/?attachment_id=41\" class=\"wp-image-41\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-leaf-3881675_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/autumn-leaf-3881675_960_720.jpg\" alt=\"\" data-id=\"42\" data-link=\"http://localhost/wordpress_dev/?attachment_id=42\" class=\"wp-image-42\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/fall-foliage-3705550_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/fall-foliage-3705550_960_720.jpg\" alt=\"\" data-id=\"43\" data-link=\"http://localhost/wordpress_dev/?attachment_id=43\" class=\"wp-image-43\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/flowers-3705716_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/flowers-3705716_960_720.jpg\" alt=\"\" data-id=\"44\" data-link=\"http://localhost/wordpress_dev/?attachment_id=44\" class=\"wp-image-44\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/maple-leaves-2895335_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/maple-leaves-2895335_960_720.jpg\" alt=\"\" data-id=\"45\" data-link=\"http://localhost/wordpress_dev/?attachment_id=45\" class=\"wp-image-45\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3550693_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3550693_960_720.jpg\" alt=\"\" data-id=\"46\" data-link=\"http://localhost/wordpress_dev/?attachment_id=46\" class=\"wp-image-46\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3623331_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/sunflower-3623331_960_720.jpg\" alt=\"\" data-id=\"47\" data-link=\"http://localhost/wordpress_dev/?attachment_id=47\" class=\"wp-image-47\"/></a></figure></li><li class=\"blocks-gallery-item\"><figure><a href=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/wheat-3506758_960_720.jpg\"><img src=\"http://localhost/wordpress_dev/wp-content/uploads/2019/01/wheat-3506758_960_720.jpg\" alt=\"\" data-id=\"48\" data-link=\"http://localhost/wordpress_dev/?attachment_id=48\" class=\"wp-image-48\"/></a></figure></li></ul>\n<!-- /wp:gallery -->', 'Galerie', '', 'inherit', 'closed', 'closed', '', '38-revision-v1', '', '', '2019-01-11 16:46:41', '2019-01-11 15:46:41', '', 38, 'http://localhost/wordpress_dev/2019/01/11/38-revision-v1/', 0, 'revision', '', 0),
(52, 1, '2019-01-14 09:46:54', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2019-01-14 09:46:54', '0000-00-00 00:00:00', '', 0, 'http://localhost/wordpress_dev/?page_id=52', 0, 'page', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Non classé', 'non-classe', 0),
(2, 'principal', 'principal', 0),
(3, 'annexe', 'annexe', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(21, 2, 0),
(22, 2, 0),
(23, 2, 0),
(34, 3, 0),
(35, 3, 0),
(36, 3, 0),
(37, 3, 0),
(50, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 4),
(3, 3, 'nav_menu', '', 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'wp496_privacy,plugin_editor_notice,text_widget_custom_html,addtoany_settings_pointer'),
(15, 1, 'show_welcome_panel', '1'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '4'),
(18, 1, 'wp_user-settings', 'libraryContent=browse&editor=tinymce'),
(19, 1, 'wp_user-settings-time', '1547216500'),
(20, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(21, 1, 'metaboxhidden_nav-menus', 'a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),
(23, 1, 'nav_menu_recently_edited', '2'),
(24, 1, 'session_tokens', 'a:1:{s:64:\"684f6c53694939f223e4ba0b661f24778189ae6c4fc551471fbec30e955fa589\";a:4:{s:10:\"expiration\";i:1547628414;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36\";s:5:\"login\";i:1547455614;}}');

-- --------------------------------------------------------

--
-- Structure de la table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$B2VziGdlW0oUfK2Sy7YwZ8NZ1KIS2C0', 'admin', 'mathieuquittard@evogue.fr', '', '2019-01-11 08:54:53', '', 0, 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Index pour la table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Index pour la table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Index pour la table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Index pour la table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Index pour la table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Index pour la table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Index pour la table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT pour la table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT pour la table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
