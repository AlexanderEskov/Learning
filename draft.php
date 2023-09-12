<?php
/* Главная страница

Battle.php - страница мордобоя, где персонажи будут наносить урон

Inventory.php - инвентарь персонажа

character-setup.php - настройки персонажа 



*/

/*
sitename.com?page=home&var1=13&var2=324



http://heroes.com?page=inventory&action=pickupItem&id=324


http://heroes.com/home/
http://heroes.com/inventory/pickUpItem/id=15
http://heroes.com/inventory/deleteItem/id=15
*/

if(isset($_GET['page'])
{
    // Redirect to $_GET['page']-controller
}




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

    public function actionRandomAction($param1, $param2)
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