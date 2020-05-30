<?php
include 'includes/header.php';
?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 lg-6">
            <div class="card p-5">
                <h2 class="text-center">Simplexe Project</h2><br>
                <form action="FillContraintes.php" method="post">
                    <div class="form-group">
                        <select onChange="checkFirstFormValid()" class="form-control" name="method" id="method">
                            <option value="" disabled selected>choisir la methode</option>
                            <option value="1">Maximisation</option>
                            <option value="2">Minimisation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input onChange="checkFirstFormValid()" type="number" name="nb_variable" id="nb_variable"
                            placeholder="indiquer le nombre de variable" class="form-control">
                    </div>
                    <div class="form-group">
                        <input onChange="checkFirstFormValid()" type="number" name="nb_contrainte" id="nb_contrainte"
                            placeholder="indiquer le nombre de contrainte" class="form-control">
                    </div>
                    <div class="form-group">
                        <button disabled type="submit" id="continue"
                            class="disable_btn w-100 btn btn-primary">Continue</button>
                    </div>
                </form>
            </div>
            <div class="card mt-5 p-5 ">
                <h6 class="text-left">Made with ❤ by</h4><br>
                    <ul class="profiles">
                        <li><a target="_blank" href="http://linkedin.com/in/oussidi">Roudani Moahmed</a></li>
                        <li><a target="_blank" href="http://linkedin.com/in/oussidi">Oussidi Mohamed</a></li>
                        <li><a target="_blank" href="http://linkedin.com/in/oussidi">Harir Youness</a></li>
                        <li><a target="_blank" href="http://linkedin.com/in/oussidi">El Allaoui El Mehdi</a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>