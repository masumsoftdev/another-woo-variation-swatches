<?php 
namespace AnotherWooVariation\Core\Controllers;

// Exit if accessed directly
if (!defined('ABSPATH')) { exit; }

class AdminMenu {

    // Constructor
    public function __construct() { 
        add_action('admin_menu', [$this, 'admin_menu']);
    }

    public function admin_menu() {

        $admin_menu_icon = 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyOC4yLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAyMCAyMCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjAgMjA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoJLnN0MHtmaWxsOiMyMjA0NUQ7fQ0KPC9zdHlsZT4NCjxnPg0KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xNC4yNCwxMS4xOWMtMC4xNywwLTAuMzUsMC4wMi0wLjUyLDBjLTAuNTItMC4wNy0wLjcxLDAuMTMtMC42OSwwLjY3YzAuMDIsMC40NSwwLjExLDAuNjksMC42MSwwLjY0DQoJCWMwLjQxLTAuMDQsMC44NCwwLDEuMjUtMC4wMWMwLjQ3LTAuMDEsMC44MS0wLjI4LDAuOC0wLjYzYy0wLjAxLTAuMzctMC4zMy0wLjY1LTAuNzgtMC42NkMxNC42OSwxMS4xOCwxNC40NiwxMS4xOSwxNC4yNCwxMS4xOXoiDQoJCS8+DQoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTE0LjIsNy41MmMtMC4xNiwwLTAuMzEsMC0wLjQ3LDBjLTAuNjksMC0wLjY3LDAuMDEtMC43LDAuNjljLTAuMDIsMC40OSwwLjE3LDAuNjUsMC42MywwLjYxDQoJCWMwLjQxLTAuMDMsMC44MywwLDEuMjUtMC4wMWMwLjQ0LTAuMDIsMC44Mi0wLjMzLDAuNzgtMC42N2MtMC4wNi0wLjQyLTAuMzQtMC42Mi0wLjc2LTAuNjJDMTQuNjksNy41MywxNC40NCw3LjUyLDE0LjIsNy41MnoiLz4NCgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMTYuMTIsMi44MkMxMC45Ni0xLjczLDMsMC4zOCwwLjcxLDYuOTFDMC41Myw3LjQxLDAuNzQsNy45MywxLjIsOC4xMmMwLjQ4LDAuMiwxLTAuMDUsMS4xOS0wLjYyDQoJCWMwLjM5LTEuMTQsMS4wMi0yLjE0LDEuODYtMi45OWMzLjQyLTMuNDgsOS4xOC0yLjk2LDExLjkzLDEuMDdjMi4zNSwzLjQ0LDEuNjcsNy45My0xLjU5LDEwLjU0Yy0yLjkxLDIuMzMtNy4xMSwyLjI1LTkuOTEtMC4yDQoJCWMtMC44MS0wLjcxLTEuNDEtMS41OS0xLjgxLTIuNTljLTAuMzQtMC44NS0wLjEyLTEuNTgsMC43Mi0xLjljMC44LTAuMywxLjY3LTAuNDIsMi41Mi0wLjU2YzAuMTItMC4wMiwwLjM4LDAuMjMsMC40MiwwLjM5DQoJCWMwLjM3LDEuNTgsMS40OCwyLjQ4LDMuMSwyLjQ5YzAuNzIsMCwxLjQzLTAuMDMsMi4xNSwwLjAxYzAuNDgsMC4wMiwwLjU5LTAuMTYsMC41OC0wLjZjLTAuMDMtMS4wNS0wLjAxLTIuMDktMC4wMS0zLjE0DQoJCWMwLTEuMDgtMC4wMS0yLjE2LDAuMDEtMy4yNWMwLjAxLTAuMzctMC4xMi0wLjUtMC40OC0wLjQ4Yy0xLjAxLDAuMDQtMi4wMy0wLjA0LTMuMDIsMC4xYy0xLjE5LDAuMTctMS45NSwxLTIuMjQsMi4xNQ0KCQljLTAuMTMsMC41LTAuMzYsMC41Ny0wLjgsMC41N2MtMS4yLDAuMDItMi4zNiwwLjIzLTMuMzgsMC45Yy0xLjMzLDAuODctMS44MiwyLjQ5LTEuMTksNC4wMWMxLjMzLDMuMTcsMy43Nyw0LjkzLDcuMTEsNS40OA0KCQljNC4yNSwwLjY5LDguMjYtMS42NiwxMC4wMy01LjI2QzIwLjI3LDEwLjM4LDE5LjM2LDUuNjcsMTYuMTIsMi44MnogTTguNiw4Ljg3bDEuOTYsMC45OEw4LjYsMTEuMTNWOC44N3oiLz4NCjwvZz4NCjwvc3ZnPg0K';
        add_menu_page(
            esc_html__('Woo Variations', 'another-woo-variation-swatches'),
            esc_html__('Woo Variations', 'another-woo-variation-swatches'),
            'manage_options', 
            'avsfw-manager',
            [$this, 'avsfw_manager_page'],
            $admin_menu_icon,
            52
        );

        add_submenu_page(
            'avsfw-manager',
            esc_html__("Inventory", "another-woo-variation-swatches"),
            esc_html__("Inventory", "another-woo-variation-swatches"),
            'manage_options',
            'avsfw-manager#',
            [$this, "avsfw_manager_page"]
        );

        // Create a array for sub menu 
        $sub_menu = array(  
            array(
                'id'         => 'purchase',
                'Title'      => esc_html__('Purchase', 'another-woo-variation-swatches'),
                'capability' => 'manage_options',                           // Example capability
            ), 
            array(
                'id'         => 'orders',
                'Title'      => esc_html__('Orders', 'another-woo-variation-swatches'),
                'capability' => 'manage_options',                         // Example capability
            ),  
            array(
                'id'         => 'sales',
                'Title'      => esc_html__('Sales', 'another-woo-variation-swatches'),
                'capability' => 'manage_options',                        // Example capability
            ),
            array(
                'id'         => 'expense',
                'Title'      => esc_html__('Expense', 'another-woo-variation-swatches'),
                'capability' => 'manage_options',                          // Example capability
            ),
            array(
                'id'         => 'reports',
                'Title'      => esc_html__('Reports', 'another-woo-variation-swatches'),
                'capability' => 'manage_options',                          // Example capability
            ),
            array(
                'id'         => 'customers',
                'Title'      => esc_html__('Customers', 'another-woo-variation-swatches'),
                'capability' => 'manage_options',                            // Example capability
            ),
            array(
                'id'         => 'settings',
                'Title'      => esc_html__('Settings', 'another-woo-variation-swatches'),
                'capability' => 'manage_options',                           // Example capability
            )
        );
         
        // Loop through array and create sub menu
        foreach ($sub_menu as $menu) {
            $menu_id = $menu['id'];
            add_submenu_page(
                'avsfw-manager',
                $menu['Title'],
                $menu['Title'],
                $menu['capability'],
                'avsfw-manager#/' . $menu_id,
                [$this, 'avsfw_manager_page']
            );
        }

        // Remove Submenu Page
        remove_submenu_page('avsfw-manager', 'avsfw-manager');

        // License Settings 
        add_submenu_page(
            'avsfw-manager',
            esc_html__("License", "another-woo-variation-swatches"),
            esc_html__("License", "another-woo-variation-swatches"),
            'manage_options',
            'woonxt-pro-manager-license',
            [$this, "avsfw_manager_page"]
        );
    }


    public function avsfw_manager_page() { 
        include __DIR__ . '/../Views/admin-page.php';
    }
    

    public function avsfw_manager_access(){
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }
    }
}