<!-- $symbols = '!?&%$<>^+-*/()[]{}@#_='; -->

<main class="container">

    <div>
        <div class="p-4 border border-1 ">
            qui metto alert, errori o password generata
        </div>
        <form action="main.php" method="GET" class="p-4 border border-1 mt-2 ">

            <div class="container-fluid mt-5 p-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div>Lunghezza password</div>
                        <div class="mt-3">Consenti ripetizioni di uno o più caratteri</div>
                    </div>
                    <div class="col-lg-6">
                        <!-- lunghezza password -->
                        <div>
                            <input type="number" name="numero">
                        </div>

                        <!-- Radio -->
                        <div class="mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="si" id="repetiton">
                                <label class="form-check-label" for="repetiton">
                                    Si
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="no" id="norepetition" checked>
                                <label class="form-check-label" for="norepetition">
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