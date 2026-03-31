## Assignment 4: Custom WordPress Plugin

### Plugins vs. Theme Functions

A plugin is used to add features that should work no matter what theme is active. In this project, the reading time, shortcode, and footer message belong in a plugin because they are not related to design. If these features were inside functions.php, they would stop working if the theme changes.


### Actions vs. Filters

An action hook lets you add new content to a specific place in WordPress, while a filter hook lets you modify existing content. In my plugin, I used an action hook to add a custom message in the footer of the site. I also used a filter hook to add a reading time and word count above every single post.

### Shortcodes

A shortcode allows editors to add custom content inside a post by typing a simple tag. My shortcode creates a styled quote box using attributes like quote and source. Editors can use it by typing [metro_quote quote="text" source="author"] inside the post.

### Real-World Reflection

The reading time feature helps readers quickly understand how long an article will take to read. The shortcode allows editors to highlight important quotes in a clean and professional way. The footer message adds extra information or branding to the site, improving the overall experience.