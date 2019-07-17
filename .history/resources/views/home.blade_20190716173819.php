@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"> <!-- Logo -->
            <img src="/svg/react.svg" alt="" style="max-height: 150px; background-color: grey;" class="rounded-circle"/>
        </div>
        <div class="col-9 p-5"> <!-- Logo -->
            <div><h1>Instagram Clone</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>100</strong> posts</div>
                <div class="pr-5"><strong>35</strong> follwers</div>
                <div class="pr-5"><strong>12</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">InstagramClone.org</div>
            <div>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</div>
            <div><a href="#">instagramclone.org</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://picsum.photos/id/237/200/300" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/200/300?grayscale" class="w-100 h-50">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/200/300/?blur" class="w-100 h-50">
        </div>
    </div>
</div>
@endsection
