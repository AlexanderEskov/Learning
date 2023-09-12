<?php
    class Controller extends AbstractController
    {
        public __construct()
        {
    
        }
    
    
        public function actionPickUpItem($id)
        {
            
        }
    
        public function actionDelete($id)
        {
            
        }
    
        public function actionTest($param1, $param2)
        {
            // Some code here...
            return $data;
        }
    
        public function actionAnotherRandomAction($param1, $param2)
        {
            // Some code here...
            return render($data, $view);
        }
    
        public function actionSymfonyAction($param1, $param2)
        {
            // Some code here...
            return new JSONResponse();
        }
    
        public function actionHybridAction($param1, $param2)
        {
            // Some code here...
    
            $template;
            $data;
            return new Response(render($template, $data));
        }
    
    }
    

?>