<?php
include __DIR__ . "/Functions/function.php";
$newPassword = generatePassword();
?>

<main class="container ">

    <div>
        <div class="p-4 border border-1 rounded-4 mylight-blue">
            <?php echo $newPassword; ?>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET"
            class="p-4 border border-1 rounded-4  mt-2 mylight ">

            <div class="container-fluid mt-5 p-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div>Lunghezza password</div>
                        <div class="mt-3">Consenti ripetizioni di uno o più caratteri</div>
                    </div>
                    <div class="col-lg-6">
                        <!-- lunghezza password -->
                        <div>
                            <input type="number" name="passLenght" min="6" max="18">
                        </div>

                        <!-- Radio -->
                        <div class="mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="repetiton" id="repetiton_si"
                                    value="1">
                                <label class="form-check-label" for="repetiton_si">
                                    Si
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="repetiton" id="repetition_no" checked
                                    value="0">
                                <label class="form-check-label" for="repetition_no">
                                    No
                                </label>
                            </div>
                        </div>
                        <!-- Check -->
                        <div class="mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="letterCheck">
                                <label class="form-check-label" for="letterCheck">
                                    Lettere
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="numberCheck">
                                <label class="form-check-label" for="numberCheck">
                                    Numeri
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="simbolCheck">
                                <label class="form-check-label" for="simbolCheck">
                                    Simboli
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mt-2">
                <button class="btn btn-success " type="submit">Genera</button>
                <button class="btn btn-secondary " type="reset">Annulla</button>
            </div>
        </form>
    </div>
</main>