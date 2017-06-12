<div class="text-center" style="margin-bottom:4%">
    <h3><strong>Categories</strong></h3>
</div>

<div class="row">

    @foreach($categories as $category)

        @include('user.partials._categorybadge')

    @endforeach

</div>