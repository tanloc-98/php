<?php require_once './helper/input.php' ?>
<?php require_once './helper/select.php' ?>
<?php require_once './data/data.php' ?>
<?php 
    $title          = 'Registration Info';
    $xhtml          = '';
    $inputName      =  inputHepler('text','Name','name','input--style-2');
    $inputBirthday  =  inputHepler('text','Birthdate','birthday','input--style-2 js-datepicker');
    $inputRescode   =  inputHepler('text','Registration Code','res_code','input--style-2');
    $inputGender    =  selectHelper($arrGender,'Gender','gender');
    $inputClass     =  selectHelper($arrClass,'Class','class');

    function renderInput($input,$key){
        if($key == 'input'){
            return sprintf('<div class="input-group">%s</div>',$input);
        }
        return sprintf('<div class="input-group"><div class="rs-select2 js-select-simple select--no-search">%s<div class="select-dropdown"></div></div></div>',$input);
    }

?>
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"><?= $title ?></h2>
                    <form method="POST">
                        <?=  renderInput($inputName,'input') ?>
                        <div class="row row-space">
                            <div class="col-2">
                                <?=  renderInput($inputBirthday,'input') ?>
                            </div>
                            <div class="col-2">
                                <?=  renderInput($inputGender,'select') ?>        
                            </div>
                        </div>
                        <?=  renderInput($inputClass,'select') ?>
                        <div class="row row-space">
                            <div class="col-2">
                                <?=  renderInput($inputRescode,'input') ?>
                            </div>
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Search</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>