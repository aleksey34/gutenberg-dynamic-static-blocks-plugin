<?php


class AlexCustomGutenCategory{

    public function __construct(){

        $this->alex_create_guten_category();
    }

    //Create custom category for Guten blocks
    public function alex_create_guten_category(){
        add_filter( 'block_categories_all' , function( $categories ) {

            // Adding a new category.
            $categories[] = array(
                'slug'  => 'alex_custom_guten_common_category',
                'title' => 'alex block'
            );
        
            return $categories;
        } );
    }

}


