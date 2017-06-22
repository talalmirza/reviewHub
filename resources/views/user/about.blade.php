@extends ('user.masterlayout')
@section ('custom-css')
<style type="text/css">
    .abtext{
        text-align: center;
        font-family: sans-serif, 'Roboto Slab', serif;
        color: white;
        font-size: 60px;
    }
    .atext{
        text-align: center;
        font-family: sans-serif, 'Roboto Slab', serif;
        color: white;
		opacity:1;

    }
    .bgimg {
        
        background-image: url('../images/new4.jpg');
        background-repeat: no-repeat;
		opacity:0.6;

        }

</style>
@endsection
@section ('content')
    @include ('user.partials.navbar')

    <div class="container-fluid bgimg">
        <div class="container">
            <div class="row" style="margin-top: 12%">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <h1><h1 class="abtext">About Us</h1></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h3 class="atext">We provide professional reviews of products</h3>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="heading-font text-center col-md-12 col-sm-12"> <h1 style="color: grey;">The Story Behind Our Story</h1> </div>
        </div>
        <div class="row">
            <div class="heading-font text-center col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                <h4 style="color: grey;">In 2013, we met as graduate students at CIIT.<br>
                    While Talal was working in software house (a startup) with their go-to-market strategy, we started to notice something:<br>
                    <b>Customers had gotten really curious to know about the things they want.</b><br>
                    So after many meetings, even more coffee, and the occasional hangouts we came to the simple observation:
                    <br>People don’t want to be deceived by marketers or service providers through their
                    bad Quality product or service. They want to be helped.
                </h4>
                <br> <br>
                <h1 style="color: grey;"><b>SO..</b></h1>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="heading-font text-center col-md-12 col-sm-12"> <h1 style="color: grey;">Why ReviewHub ?</h1> </div>
        </div>
        <div class="row">
            <div class="heading-font text-center col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1"> <h4 style="color: grey;"> An idea in the moment has sparked a global movement.
                    And we’re just getting started.<br>We provide reviews of products according to Pakistani market.Reviews serve as luxury to
                    people which eradicate the risk while buying the product with knowledge about it or by knowing
                    the performance as well</h4></div>
        </div>
    </div>
    <br><br>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
        <hr style="border-top:5px solid lightslategrey">
        </div>
    </div>
    </div>
    <br><br><br>

@endsection

@section ('custom-script')


@endsection