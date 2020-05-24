<?php
include 'includes/header.php';

if(isset($_POST["calcul"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

if(isset($_POST["nb_contrainte"],$_POST["nb_variable"],$_POST["method"])){
    $_SESSION["nb_contrainte"]=$_POST["nb_contrainte"];
    $_SESSION["nb_variable"]=$_POST["nb_variable"];
    $_SESSION["method"]=$_POST["method"];
}else{
    if(!isset($_SESSION["nb_contrainte"],$_SESSION["nb_variable"],$_SESSION["method"]))
        header("location: ./");
}
?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 lg-10">
            <div class="card p-5">
                <h2 class="text-center">Simplexe - <?=$_SESSION["method"]==1 ? "Maximisation" : "Minimisation" ?></h2>
                <br>
                <form id="formFillContraintes" action="FillContraintes.php" method="post">
                    <div class="form-group mt-5">
                        <label class="mb-4"><b>La Fonction Objectif</b></label>
                        <div class="row">
                            <div class="col-1 text-right mt-2">
                                <label><b> Z =</b></label>
                            </div>
                            <?php for ($i=1;$i<=$_SESSION["nb_variable"];$i++): ?>
                            <div class="col">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input name="z_values[]" type="number" class="form-control"
                                        placeholder="valeur de X<?=$i?>">
                                    <div class="input-group-addon">X<?=$i?></div>
                                </div>
                            </div>
                            <?php endfor ?>

                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label class="mb-4"><b>Les Contraintes</b></label>
                        <!-- loop number of contraites -->
                        <?php for ($i=1;$i<=$_SESSION["nb_contrainte"];$i++): ?>
                        <div class="row mb-3">
                            <!-- loop number of variable -->
                            <?php for($j=1;$j<=$_SESSION["nb_variable"];$j++): ?>
                            <div class="col">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input name="data['c_v_values'][]" type="number" class="form-control"
                                        placeholder="valeur de X<?=$j?>">
                                    <div class="input-group-addon">X<?=$j?></div>
                                </div>
                            </div>
                            <!--  for th plus sign -->
                            <?php if($j<$_SESSION["nb_variable"]): ?>
                            <span class="plus_sign">+</span>
                            <?php endif ?>
                            <?php endfor ?>

                            <!-- contrainte operation -->
                            <div class="col-2">
                                <select class="form-control" name="data['contrainte_operation'][]">
                                    <option value="inf_egal"> &le; </option>
                                    <option value="sup_egal">&ge;</option>
                                    <option value="egal">=</option>
                                </select>
                            </div>
                            <!-- contrainte value -->
                            <div class="col">
                                <input type="number" name="data['contrainte_value'][]" class="form-control"
                                    placeholder="valeur de contrainte">
                            </div>

                        </div>
                        <?php endfor ?>

                    </div>

                    <div class="form-group mt-5">
                        <button type="submit" id="Calculer" class=" w-100 btn btn-primary"
                            name="calcul">Calculer</button>
                    </div>
                    <div class="form-group">
                        <a href="./" class=" w-100 btn btn-secondary">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>