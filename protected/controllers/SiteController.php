<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

    public function actionBc()
    {
        switch ($_POST["type"]) {
            case 'model':
                echo "Модель<br />".CHtml::dropDownList('auto_model',false,BcAutoModels::modelList($_POST["brand"]));
                break;
            case 'year':
                echo "Год выпуска<br />".CHtml::dropDownList('auto_year',false,BcAutoYears::yearList($_POST["brand"],$_POST["model"]));
                break;
            case 'power':
                echo "Мощность двигателя<br />".CHtml::dropDownList('auto_power',false,BcAutoModifications::powerList($_POST["brand"],$_POST["model"],$_POST["year"]));
                break;
        }
    }

    public function actionAuto()
    {
        $auto = BcAutos::model()->findByAttributes(array(
            'id_brand' => $_POST["auto_brand"],
            'id_model' => $_POST["auto_model"],
            'id_year' => $_POST["auto_year"],
            'id_modification' => $_POST["auto_power"],
        ));

        if ($auto != null) {
            echo '<pre>';
            $nativeFrontTiresSizes = BcNativeTiresFront::model()->findAllByAttributes(array('id_auto'=>$auto->id));
            $nativeBackTiresSizes = BcNativeTiresBack::model()->findAllByAttributes(array('id_auto'=>$auto->id));
            $alternativeFrontTiresSizes = BcAlternativeTiresFront::model()->findAllByAttributes(array('id_auto'=>$auto->id));
            $alternativeBackTiresSizes = BcAlternativeTiresBack::model()->findAllByAttributes(array('id_auto'=>$auto->id));

            $td = array();
            $ntf = array();
            foreach ($nativeFrontTiresSizes as $row) {
                $size = BcTireSizes::model()->findByPk($row->id_tire_size);
                $width = BcTireWidths::model()->findByPk($size->id_width);
                $height = BcTireHeights::model()->findByPk($size->id_height);
                $diameter = BcTireDiameters::model()->findByPk($size->id_diameter);
                $ntf[$diameter->value][] = array($width->value,$height->value);
                $td[] = $diameter->value;
            }
            print_r($ntf);

            $atf = array();
            foreach ($alternativeFrontTiresSizes as $row) {
                $size = BcTireSizes::model()->findByPk($row->id_tire_size);
                $width = BcTireWidths::model()->findByPk($size->id_width);
                $height = BcTireHeights::model()->findByPk($size->id_height);
                $diameter = BcTireDiameters::model()->findByPk($size->id_diameter);
                $atf[$diameter->value][] = array($width->value,$height->value);
                $td[] = $diameter->value;
            }
            print_r($atf);

            $ntb = array();
            foreach ($nativeBackTiresSizes as $row) {
                $size = BcTireSizes::model()->findByPk($row->id_tire_size);
                $width = BcTireWidths::model()->findByPk($size->id_width);
                $height = BcTireHeights::model()->findByPk($size->id_height);
                $diameter = BcTireDiameters::model()->findByPk($size->id_diameter);
                $ntb[$diameter->value][] = array($width->value,$height->value);
                $td[] = $diameter->value;
            }
            print_r($ntb);

            $atb = array();
            foreach ($alternativeBackTiresSizes as $row) {
                $size = BcTireSizes::model()->findByPk($row->id_tire_size);
                $width = BcTireWidths::model()->findByPk($size->id_width);
                $height = BcTireHeights::model()->findByPk($size->id_height);
                $diameter = BcTireDiameters::model()->findByPk($size->id_diameter);
                $atb[$diameter->value][] = array($width->value,$height->value);
                $td[] = $diameter->value;
            }
            print_r($atb);

            echo '</pre>';










            //TIRE
            /*$nativeFrontTiresSizes = BcNativeTiresFront::model()->findAllByAttributes(array('id_auto'=>$auto->id));
            $nativeBackTiresSizes = BcNativeTiresBack::model()->findAllByAttributes(array('id_auto'=>$auto->id));
            $alternativeFrontTiresSizes = BcAlternativeTiresFront::model()->findAllByAttributes(array('id_auto'=>$auto->id));
            $alternativeBackTiresSizes = BcAlternativeTiresBack::model()->findAllByAttributes(array('id_auto'=>$auto->id));

            //DISK
            $nativeFrontDiskSizes = BcNativeDisksFront::model()->findAllByAttributes(array('id_auto'=>$auto->id));
            $nativeBackDiskSizes = BcNativeDisksBack::model()->findAllByAttributes(array('id_auto'=>$auto->id));
            $alternativeFrontDiskSizes = BcAlternativeDisksFront::model()->findAllByAttributes(array('id_auto'=>$auto->id));
            $alternativeBackDiskSizes = BcAlternativeDisksBack::model()->findAllByAttributes(array('id_auto'=>$auto->id));

            $td = array();
            $ntf = array();
            foreach ($nativeFrontTiresSizes as $row) {
                $size = BcTireSizes::model()->findByPk($row->id_tire_size);
                $width = BcTireWidths::model()->findByPk($size->id_width);
                $height = BcTireHeights::model()->findByPk($size->id_height);
                $diameter = BcTireDiameters::model()->findByPk($size->id_diameter);
                $ntf[$diameter->value][] = array($width->value,$height->value);
                $td[] = $diameter->value;
            }
            print_r($ntf);

            $atf = array();
            foreach ($alternativeFrontTiresSizes as $row) {
                $size = BcTireSizes::model()->findByPk($row->id_tire_size);
                $width = BcTireWidths::model()->findByPk($size->id_width);
                $height = BcTireHeights::model()->findByPk($size->id_height);
                $diameter = BcTireDiameters::model()->findByPk($size->id_diameter);
                $atf[$diameter->value][] = array($width->value,$height->value);
                $td[] = $diameter->value;
            }
            //print_r($atf);

            $ntb = array();
            foreach ($nativeBackTiresSizes as $row) {
                $size = BcTireSizes::model()->findByPk($row->id_tire_size);
                $width = BcTireWidths::model()->findByPk($size->id_width);
                $height = BcTireHeights::model()->findByPk($size->id_height);
                $diameter = BcTireDiameters::model()->findByPk($size->id_diameter);
                $ntb[$diameter->value][] = array($width->value,$height->value);
                $td[] = $diameter->value;
            }
            print_r($ntb);

            $atb = array();
            foreach ($alternativeBackTiresSizes as $row) {
                $size = BcTireSizes::model()->findByPk($row->id_tire_size);
                $width = BcTireWidths::model()->findByPk($size->id_width);
                $height = BcTireHeights::model()->findByPk($size->id_height);
                $diameter = BcTireDiameters::model()->findByPk($size->id_diameter);
                $atb[$diameter->value][] = array($width->value,$height->value);
                $td[] = $diameter->value;
            }
            //print_r($atb);

            //$a = array_diff($ntf,$ntb);
            $nativeTireBack = (empty($a)) ? false : true;

            $a = array_diff($atf,$atb);
            $alternativeTireBack = (empty($a)) ? false : true;

            $td = array_unique($td);
            asort($td);


            $dd = array();
            $ndf = array();
            foreach ($nativeFrontDiskSizes as $row) {
                $size = BcDiskSizes::model()->findByPk($row->id_wheel_size);
                $rim = BcDiskRims::model()->findByPk($size->id_rim);
                $diameter = BcDiskDiameters::model()->findByPk($size->id_diameter);
                $et = BcDiskEts::model()->findByPk($size->id_et);
                $ndf[$diameter->value][] = array($rim->value,$et->value);
                $dd[] = $diameter->value;
            }
            //print_r($ndf);

            $adf = array();
            foreach ($alternativeFrontDiskSizes as $row) {
                $size = BcDiskSizes::model()->findByPk($row->id_wheel_size);
                $rim = BcDiskRims::model()->findByPk($size->id_rim);
                $diameter = BcDiskDiameters::model()->findByPk($size->id_diameter);
                $et = BcDiskEts::model()->findByPk($size->id_et);
                $adf[$diameter->value][] = array($rim->value,$et->value);
                $dd[] = $diameter->value;
            }
            //print_r($adf);

            $ndb = array();
            foreach ($nativeBackDiskSizes as $row) {
                $size = BcDiskSizes::model()->findByPk($row->id_wheel_size);
                $rim = BcDiskRims::model()->findByPk($size->id_rim);
                $diameter = BcDiskDiameters::model()->findByPk($size->id_diameter);
                $et = BcDiskEts::model()->findByPk($size->id_et);
                $ndb[$diameter->value][] = array($rim->value,$et->value);
                $dd[] = $diameter->value;
            }
            //print_r($ndb);

            $adb = array();
            foreach ($alternativeBackDiskSizes as $row) {
                $size = BcDiskSizes::model()->findByPk($row->id_wheel_size);
                $rim = BcDiskRims::model()->findByPk($size->id_rim);
                $diameter = BcDiskDiameters::model()->findByPk($size->id_diameter);
                $et = BcDiskEts::model()->findByPk($size->id_et);
                $adb[$diameter->value][] = array($rim->value,$et->value);
                $dd[] = $diameter->value;
            }
            //print_r($adb);

            $a = array_diff($ndf,$ndb);
            $nativeDiskBack = (empty($a)) ? false : true;

            $a = array_diff($adf,$adb);
            $alternativeDiskBack = (empty($a)) ? false : true;

            $dd = array_unique($dd);
            asort($dd);




            $auto_brand = BcAutoBrands::model()->findByPk($auto->id_brand)->getAttribute('value');
            $auto_model = BcAutoModels::model()->findByPk($auto->id_model)->getAttribute('value');
            $auto_year = BcAutoYears::model()->findByPk($auto->id_year)->getAttribute('value');
            $auto_power = BcAutoModifications::model()->findByPk($auto->id_modification)->getAttribute('value');

            $this->render('auto',array(
                'auto' => $auto,
                'auto_title' => "$auto_brand $auto_model $auto_year $auto_power",

                'nativeTireBack' => $nativeTireBack,
                'altTireBack' => $alternativeTireBack,
                'nativeDiskBack' => $nativeDiskBack,
                'altDiskBack' => $alternativeDiskBack,

                'ntf' => $ntf,
                'atf' => $atf,

                'ntb' => $ntb,
                'atb' => $atb,

                'ndf' => $ndf,
                'adf' => $adf,

                'ndb' => $ndb,
                'adb' => $adb,

                'td' => $td,
                'dd' => $dd
            ));*/
        }
    }

}