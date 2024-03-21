<?php
// Custom ACF location rule for Product Category
class Location_Courses extends ACF_Location {
    public function initialize() {
        $this->name = 'product_cat';
        $this->label = __("Product Category", 'acf');
        $this->category = 'post';
        $this->object_type = 'product';
    }

    public function match($rule, $screen, $field_group) {
        if (!isset($screen['post_type']) || $screen['post_type'] !== 'product') {
            return false;
        }

        $product_id = isset($screen['post_id']) ? $screen['post_id'] : 0;
        $product_terms = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'ids'));

        if (empty($product_terms)) {
            return false;
        }

        $selected_term_id = (int) $rule['value'];
        return in_array($selected_term_id, $product_terms);
    }

    public function get_values($rule) {
        $terms = get_terms(array(
            'taxonomy' => 'product_cat',
            'hide_empty' => false,
        ));

        $choices = array();
        foreach ($terms as $term) {
            $choices[$term->term_id] = $term->name;
        }

        return $choices;
    }
}
acf_register_location_type('Location_Courses');
