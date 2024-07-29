<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>




    #Restful api CRUD with module generated gii yii2 Framework



configure to path `config/web.php` under config on the top

        // start implement module v1
            'modules' => [
                'v1' => [
                    'class' => 'app\modules\v1\Module',
                ],
            ],
        // end implement module v1


create controller file under path `module\v1\controller`

configure rules `config/web.php` 


    'rules' => [
        ['class' => 'yii\rest\UrlRule', 'controller' => 'v1/buahh'],
            ],


- Get       http://localhost:8080/v1/buahhs or http://localhost:8080/v1/buahhs/{id}
- Post      http://localhost:8080/v1/buahhs
- Put       http://localhost:8080/v1/buahhs/{id}
- Delete    http://localhost:8080/v1/buahhs/{id}


Thanks.