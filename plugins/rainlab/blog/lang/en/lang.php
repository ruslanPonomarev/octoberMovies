<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'A robust blogging platform.'
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Manage Blog Posts',
        'posts' => 'Posts',
        'create_post' => 'Blog post',
        'categories' => 'Categories',
        'create_category' => 'Blog category',
        'tab' => 'Blog',
        'access_posts' => 'Manage the blog posts',
        'access_categories' => 'Manage the blog categories',
        'access_other_posts' => 'Manage other users blog posts',
        'access_import_export' => 'Allowed to import and export posts',
        'access_publish' => 'Allowed to publish posts',
        'manage_settings' => 'Manage blog settings',
        'delete_confirm' => 'Are you sure?',
        'chart_published' => 'Published',
        'chart_drafts' => 'Drafts',
        'chart_total' => 'Total',
        'settings_description' => 'Manage blog settings',
        'show_all_posts_label' => 'Show all posts to backend users',
        'show_all_posts_comment' => 'Display both published and unpublished posts on the frontend to backend users',
        'tab_general' => 'General'
    ],
    'posts' => [
        'list_title' => 'Manage the blog posts',
        'filter_category' => 'Category',
        'filter_published' => 'Published',
        'filter_date' => 'Date',
        'new_post' => 'New post',
        'export_post' => 'Export posts',
        'import_post' => 'Import posts'
    ],
    'post' => [
        'title' => 'Title',
        'title_placeholder' => 'New post title',
        'content' => 'Content',
        'content_html' => 'HTML Content',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-post-slug',
        'categories' => 'Categories',
        'author_email' => 'Author Email',
        'created' => 'Created',
        'created_date' => 'Created date',
        'updated' => 'Updated',
        'updated_date' => 'Updated date',
        'published' => 'Published',
        'published_by' => 'Published by',
        'current_user' => 'Current user',
        'published_date' => 'Published date',
        'published_validation' => 'Please specify the published date',
        'tab_edit' => 'Edit',
        'tab_categories' => 'Categories',
        'categories_comment' => 'Select categories the blog post belongs to',
        'categories_placeholder' => 'There are no categories, you should create one first!',
        'tab_manage' => 'Manage',
        'published_on' => 'Published on',
        'excerpt' => 'Excerpt',
        'summary' => 'Summary',
        'featured_images' => 'Featured Images',
        'delete_confirm' => 'Delete this post?',
        'delete_success' => 'Successfully deleted those posts.',
        'close_confirm' => 'The post is not saved.',
        'return_to_posts' => 'Return to posts list'
    ],
    'categories' => [
        'list_title' => 'Manage the blog categories',
        'new_category' => 'New category',
        'uncategorized' => 'Uncategorized'
    ],
    'category' => [
        'name' => 'Name',
        'name_placeholder' => 'New category name',
        'description' => 'Description',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-category-slug',
        'posts' => 'Posts',
        'delete_confirm' => 'Delete this category?',
        'delete_success' => 'Successfully deleted those categories.',
        'return_to_categories' => 'Return to the blog category list',
        'reorder' => 'Reorder Categories'
    ],
    'menuitem' => [
        'blog_category' => 'Blog category',
        'all_blog_categories' => 'All blog categories',
        'blog_post' => 'Blog post',
        'all_blog_posts' => 'All blog posts',
        'category_blog_posts' => 'Blog category posts'
    ],
    'settings' => [
        'category_title' => 'Category List',
        'category_description' => 'Displays a list of blog categories on the page.',
        'category_slug' => 'Category slug',
        'category_slug_description' => "Look up the blog category using the supplied slug value. This property is used by the default component partial for marking the currently active category.",
        'category_display_empty' => 'Display empty categories',
        'category_display_empty_description' => 'Show categories that do not have any posts.',
        'category_page' => 'Category page',
        'category_page_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'post_title' => 'Post',
        'post_description' => 'Displays a blog post on the page.',
        'post_slug' => 'Post slug',
        'post_slug_description' => "Look up the blog post using the supplied slug value.",
        'post_category' => 'Category page',
        'post_category_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'posts_title' => 'Post List',
        'posts_description' => 'Displays a list of latest blog posts on the page.',
        'posts_pagination' => 'Page number',
        'posts_pagination_description' => 'This value is used to determine what page the user is on.',
        'posts_filter' => 'Category filter',
        'posts_filter_description' => 'Enter a category slug or URL parameter to filter the posts by. Leave empty to show all posts.',
        'posts_per_page' => 'Posts per page',
        'posts_per_page_validation' => 'Invalid format of the posts per page value',
        'posts_no_posts' => 'No posts message',
        'posts_no_posts_description' => 'Message to display in the blog post list in case if there are no posts. This property is used by the default component partial.',
        'posts_no_posts_default' => 'No posts found',
        'posts_order' => 'Post order',
        'posts_order_description' => 'Attribute on which the posts should be ordered',
        'posts_category' => 'Category page',
        'posts_category_description' => 'Name of the category page file for the "Posted into" category links. This property is used by the default component partial.',
        'posts_post' => 'Post page',
        'posts_post_description' => 'Name of the blog post page file for the "Learn more" links. This property is used by the default component partial.',
        'posts_except_post' => 'Except post',
        'posts_except_post_description' => 'Enter ID/URL or variable with post ID/URL you want to exclude. You may use a comma-separated list to specify multiple posts.',
        'posts_except_post_validation' => 'Post exceptions must be a single slug or ID, or a comma-separated list of slugs and IDs',
        'posts_except_categories' => 'Except categories',
        'posts_except_categories_description' => 'Enter a comma-separated list of category slugs or variable with such a list of categories you want to exclude',
        'posts_except_categories_validation' => 'Category exceptions must be a single category slug, or a comma-separated list of slugs',
        'rssfeed_blog' => 'Blog page',
        'rssfeed_blog_description' => 'Name of the main blog page file for generating links. This property is used by the default component partial.',
        'rssfeed_title' => 'RSS Feed',
        'rssfeed_description' => 'Generates an RSS feed containing posts from the blog.',
        'group_links' => 'Links',
        'group_exceptions' => 'Exceptions'
    ],
    'sorting' => [
        'title_asc' => 'Title (ascending)',
        'title_desc' => 'Title (descending)',
        'created_asc' => 'Created (ascending)',
        'created_desc' => 'Created (descending)',
        'updated_asc' => 'Updated (ascending)',
        'updated_desc' => 'Updated (descending)',
        'published_asc' => 'Published (ascending)',
        'published_desc' => 'Published (descending)',
        'random' => 'Random'
    ],
    'import' => [
        'update_existing_label' => 'Update existing posts',
        'update_existing_comment' => 'Check this box to update posts that have exactly the same ID, title or slug.',
        'auto_create_categories_label' => 'Create categories specified in the import file',
        'auto_create_categories_comment' => 'You should match the Categories column to use this feature, otherwise select the default categories to use from the items below.',
        'categories_label' => 'Categories',
        'categories_comment' => 'Select the categories that imported posts will belong to (optional).',
        'default_author_label' => 'Default post author (optional)',
        'default_author_comment' => 'The import will try to use an existing author if you match the Author Email column, otherwise the author specified above is used.',
        'default_author_placeholder' => '-- select author --'
    ]
];
