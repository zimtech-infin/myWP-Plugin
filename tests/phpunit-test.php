<?php
// Include the file containing the functions to be tested
require_once 'mywp-plugin.php';

class MyPluginTest extends WP_UnitTestCase {

    // Test that the activation function runs without errors
    public function test_page_builder_plugin_activate() {
        // Call the function
        page_builder_plugin_activate();

        // Assert that the function completed (if it didn't, an error would be thrown and this line would not be reached)
        $this->assertTrue(true);
    }

    // Test that the deactivation function runs without errors
    public function test_page_builder_plugin_deactivate() {
        // Call the function
        page_builder_plugin_deactivate();

        // Assert that the function completed (if it didn't, an error would be thrown and this line would not be reached)
        $this->assertTrue(true);
    }
}