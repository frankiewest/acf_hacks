# ACF Custom Location Rule for Product Category

This code snippet demonstrates how to create a custom location rule in Advanced Custom Fields (ACF) for a specific product category in WooCommerce.

## Description

The `Location_Courses` class extends the `ACF_Location` class and provides a custom location rule for displaying field groups based on a selected product category. It allows you to show or hide field groups on the product edit screen depending on the product's assigned category.

## Usage

1. Copy the `Location_Courses` class code into your WordPress theme's `functions.php` file or a custom plugin file.

2. Create or edit a field group in ACF.

3. In the field group settings, go to the "Location" section.

4. Select "Product Category" from the dropdown menu.

5. Choose the "is equal to" operator.

6. Select the desired product category from the available options.

7. Save the field group.

Now, the field group will only be displayed on the product edit screen if the product belongs to the selected category.

## Methods

### `initialize()`

This method initializes the custom location rule by setting the necessary properties such as name, label, category, and object type.

### `match($rule, $screen, $field_group)`

This method determines whether the current screen matches the specified product category. It checks if the current screen is for a product post type, retrieves the associated product categories, and compares them with the selected category in the location rule.

### `get_values($rule)`

This method retrieves all the available product categories and returns them as an array of choices for the field group location rule. It uses the `get_terms()` function to fetch the product categories and builds an array where the keys are the term IDs and the values are the term names.

## Requirements

- WordPress version X.X or higher
- Advanced Custom Fields (ACF) plugin version X.X or higher
- WooCommerce plugin version X.X or higher

## Installation

1. Install and activate the Advanced Custom Fields (ACF) plugin.
2. Install and activate the WooCommerce plugin.
3. Copy the `Location_Courses` class code into your WordPress theme's `functions.php` file or a custom plugin file.

## Notes

- Make sure to replace "XX" in the code with the actual product category term ID or slug that you want to match against.
- This code assumes that you are using WooCommerce for managing products and categories. If you are using a different e-commerce plugin or custom post types, you may need to modify the code accordingly.
