<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:100,300,400,900,700,500,300,100);

    * {
        margin: 0;
        box-sizing: border-box;

    }

    body {
        background: #E0E0E0;
        font-family: 'Roboto', sans-serif;

    }



    h1 {
        font-size: 1.5em;
        color: #222;
    }

    h2 {
        font-size: .9em;
    }

    h3 {
        font-size: 1.2em;
        font-weight: 300;
        line-height: 2em;
    }

    p {
        font-size: .7em;
        color: #666;
        line-height: 1.2em;
    }

    #invoiceholder {
        width: 100%;
        hieght: 100%;
        padding-top: 50px;
    }




    #invoice {
        margin: 0 auto;
        padding: 30px;
        width: 700px;
        background: #FFF;
    }

    [id*='invoice-'] {
        /* Targets all id with 'col-' */
        border-bottom: 1px solid #EEE;
        padding: 20px;
    }

    /*  #invoice-top {
        min-height: 120px;
      
    } */

    #invoice-mid {
        border-bottom: 1px solid #EEE;
        display: flex;
        flex-direction: row;
        /*  min-height: 120px; */

    }

    #invoice-bot {
        /*   min-height: 250px; */
    }


    .info {

        display: block;
        /*   left: 0; */
        /* margin-left: 20px; */
    }

    .title {
        display: block;
        float: right;
    }

    .title p {}

    #project {
        margin-left: 52%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        padding: 5px 0 5px 15px;
        border: 1px solid #EEE
    }

    .tabletitle {
        padding: 5px;
        background: #EEE;
    }

    .service {
        border: 1px solid #EEE;
    }

    .item {
        width: 50%;
    }

    .itemtext {
        font-size: .9em;
    }

    #legalcopy {
        margin-top: 30px;
    }





    #invoice-top {
        border-bottom: 1px solid #EEE;
        /*  padding: 30px; */
        display: flex;
        flex-direction: row;

    }

</style>
<title> Facture</title>
<div id="invoiceholder">

    <div id="invoice" class="effect2">

        <div id="invoice-top">

            <div class="info">
                <h2> Stylux</h2>
                <p> Km 12 Route de Rufisque / Thiaroye sur mer </p>
                <p>
                    (NINEA : 006984604 - RC:SN DKR.2018.A.23163
                </p>
                <p>
                    Tél : 77 577 89 05
                </p>
            </div>
            <!--End Info-->
            <div class="title">
                <h1>Facture #{{ $mois }}{{ $annee }}{{ $client->id }}</h1>
                <p>Fais le : {{ $today->format('d/m/Y') }}</p>
                {{-- <p>
                    Payer avant le : {{ now()->month(now()->month + 1)->format('d/m/Y') }}
                </p> --}}
            </div>
            <!--End Title-->
        </div>
        <!--End InvoiceTop-->



        <div id="invoice-mid">


            <div class="info">
                <h2>{{ $client->nom }}</h2>
                <p>{{ $client->email }}</p>
                <p>{{ $client->adresse }}</p>
                <p>{{ $client->telephone }}</p>
            </div>

            {{-- <div id="project">
                <h2>Project Description</h2>
                <p>Proin cursus, dui non tincidunt elementum, tortor ex feugiat enim, at elementum enim quam vel
                    purus.
                    Curabitur semper malesuada urna ut suscipit.</p>
            </div> --}}

        </div>
        <!--End Invoice Mid-->



        <div id="invoice-bot">

            <div id="table">
                <table>
                    <tr class="tabletitle">
                        <td class="Hours">
                            <h2>Date</h2>
                        </td>
                        <td class="Rate">
                            <h2>Type</h2>
                        </td>
                        <td class="subtotal">
                            <h2>Montant</h2>
                        </td>
                    </tr>
                    @foreach ($encaissements as $encaisse)
                        @if ($encaisse->bon)
                            <tr class="service">
                                <td class="tableitem">
                                    <p class="itemtext">
                                        {{ $encaisse->bon->created_at->format('d/m/Y') }}</p>
                                </td>
                                <td class="tableitem">
                                    <p class="itemtext" style="text-transform: uppercase">{{ $encaisse->type }}
                                    </p>
                                </td>
                                <td class="tableitem">
                                    <p class="itemtext">
                                        {{ number_format($encaisse->bon->montant, 0, ',', ' ') }}
                                        F</p>
                                </td>
                            </tr>
                        @endif

                    @endforeach





                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate">
                            <h2>Total</h2>
                        </td>
                        <td class="payment">
                            <h2>{{ number_format($total, 0, ',', ' ') }} F CFA</h2>
                        </td>
                    </tr>

                </table>
            </div>



            <div id="legalcopy">
                <p class="legal"><strong>Merci beaucoups !</strong> 
                    La facture a été créée sur un ordinateur et est valide sans la signature et le sceau.
                </p>
            </div>

        </div>
        <!--End InvoiceBot-->
    </div>
    <!--End Invoice-->
</div><!-- End Invoice Holder-->
