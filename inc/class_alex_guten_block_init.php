<?php 


class AlexGutenBlockStaticInit { 
   public function __construct(){
    // echo WP_PLUGIN_DIR   ;

    $this -> blocks_init();
    // add_action( 'init', [$this , 'alex_guten_block_plugin_init'] );

   }

  
    public function alex_guten_block_plugin_init() {

    /**
    *test block init
    */
        register_block_type( ALEX_PLUGIN_GUTEN_DIR. '/build/test-block' );
    
    
    /**
    *todo list init
    */
        register_block_type( ALEX_PLUGIN_GUTEN_DIR. '/build/todo-list' );
       
      
    
        
    }
    public function blocks_init(){
        
       add_action( 'init', [$this , 'alex_guten_block_plugin_init'] );

    }
    

}