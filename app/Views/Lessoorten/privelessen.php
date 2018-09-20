
<!--Intro gedeelte-->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4"><?php echo ($viewModel['pageTitle']) ?></h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="">
                Met het volgen van een privéles kan je een specifieke slag en/of situatie een op een trainen met de leraar.
                Als je niet voor 16 lessen een groepsles wil volgen, dan is dit een ideale oplossing om die backhand die steeds uit gaat toch te kunnen verbeteren.</p>
                <p>Je kunt deze lessen per keer afspreken. De lessen zijn te boeken voor een lesuur (50 minuten), maar ook voor een half les uur (25 minuten).
                    Door de onverdeelde aandacht geeft dit vaak directer resultaat. </p>
                <p>Dus maak snel een afspraak en verbeter je zelf. <br>
                Bel naar 06-53374786 of stuur een email naar: info@basic-tennis.nl </p>
        </div>
<!-- Tabel met informatie-->
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col" class="bg-color">Heel privéuur</th>
                <th scope="col" class="bg-color">Half privéuur</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>€55,00 per les</td>
                <td>€27,50 per les</td>
            </tr>
            <tr>
                <td>50 minuten</td>
                <td>50 minuten</td>
            </tr>
            <tr>
                <td>1-2 personen</td>
                <td>1-2 personen</td>
            </tr>
            <tr>
                <td>Mogelijkheden Ma-Za</td>
                <td>Mogelijkheden Ma-Za</td>
            </tr>
            <tr>
                <td>Op afspraak</td>
                <td>Op afspraak</td>
            </tr>
            </tbody>
        </table>
    </div>
<!-- Het formulier om in te vullen   -->
<form>
    <div class="container">
        <div class="col-12 text-center">
            <h2>Zelf een afspraak maken</h2>
        </div>
        <hr class="welcome">
        <div class="row ">
            <div class="col-md-6">
                <label for="voornaam">Voornaam</label>
                <input type="text" class="form-control" placeholder="Voornaam" required>
            </div>
            <div class="col-md-6">
                <label for="achternaam">Achternaam</label>
                <input type="text" class="form-control" placeholder="Achternaam" required>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6">
                <label for="achternaam">Tijd / Datum</label>
                <input type="text" class="form-control" id="datetimepicker" placeholder="Tijd / datum" required>
            </div>
            <div class="col-md-6">
                <label for="email">Emailadres</label>
                <input type="text" class="form-control" placeholder="Emailadres" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="trainer">Trainer</label>
                <select id="trainer" class="form-control" required>
                    <option selected>Kies een trainer...</option>
                    <option>Richard Bitter</option>
                    <option>Hans Korporaal</option>
                    <option>Jesse Bernardus</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="priveles">Soort privéles:</label>
                <select id="priveles" class="form-control" required>
                    <option selected>Kies...</option>
                    <option>Heel lesuur (50min) - €55,00</option>
                    <option>Half lesuur (25min) - €27,50</option>
                </select>
            </div>
            <div class="col">
                <label for="telefoonnummer">Telefoonnummer</label>
                <input type="text" class="form-control" placeholder="Telefoonnummer" required>
            </div>
        </div>
        <div class=" text-center">
            <button class="btn btn-primary my-3" type="submit">Bevestig privéles</button>
        </div>
    </div>
</form>
<!--Voor de datetimepricker-->
<link href="css/jquery.datetimepicker.css" rel="stylesheet"/>
<script src="js/jquery.datetimepicker.full.js"></script>

<script>
    $("#datetimepicker").datetimepicker();
</script>