<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Css -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.head')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


</head>

<body>
    
    @include('layouts.sidebar')
    <!-- Page Heading -->
    <header>
        @include('layouts.header')
    </header>
    <!-- Page Content -->
    <main>
        <form action="/services/update/{{$services->id}}" method="POST" role="form" enctype="multipart/form-data">
            <!-- Add CSRF Token -->
            @csrf
            <div>
                <label class="labell required">{{ __('Sectortitle') }}</label><br />
                <input class="edit" type="text" value="{{$services->tital}}" name="tital" required>
            </div><br />
            <div>
                <label class="labell required">{{ __('Sectortitlear') }}</label><br />
                <input class="edit" type="text" value="{{$services->titalar}}" name="titalar" required>
            </div><br />
            <div>
                <label class="labell required">{{ __('Sectordescription') }}</label><br />
                <textarea class="edit" id="story" name="description" rows="4" maxlength="125" required>@isset($services){{$services->description}}@else @endIf</textarea>
            </div>
            <div>
                <label class="labell required">{{ __('Sectordescriptionar') }}</label><br />
                <textarea class="edit" id="story" name="descriptionar" rows="4" maxlength="125" required>@isset($services){{$services->descriptionar}}@else @endIf</textarea>
            </div>

            <br />
            {{-- <div>
                <label class="labell ">{{ __('Sectorimg') }}</label><br />
                <input class="file" type="file" name="file_path" value="{{$services->file_path}}"><img style="width: 50px; height: 50px ;" src="{{url('../storage/services/'.$services->file_path)}}" /></input>
            </div>
            <br />            <br />
            <br /> --}}

            <div>
                <label class="labell required" require>{{ __('Sectoricon') }}</label><br />
                <input class="file" type="file" name="icon" value="{{$services->icon}}"><img style="width: 50px; height: 50px" src="{{url('../storage/services/'.$services->icon)}}" /></input>
            </div>
            {{-- <br />            <br />
            <br />

            <div>
                <label class="labell required">{{ __('Sectorby') }}</label><br />
                <input class="edit" type="text" name="By" value="{{$services->By}}" required>
            </div>
            <br />
            <div>
                <label class="labell required">{{ __('Sectorbyar') }}</label><br />
                <input class="edit" type="text" name="Byar" value="{{$services->Byar}}" required>
            </div>
            <br />
            <div>
                <label class="labell ">{{ __('Sectorinto') }}</label><br />
                <textarea class="edit" id="story" name="DesHeader">@isset($services){{$services->DesHeader}}@else @endIf</textarea>
            </div>

            <br />
            <div>
                <label class="labell ">{{ __('Sectorintoar') }}</label><br />
                <textarea class="edit" id="story" name="DesHeaderar">@isset($services){{$services->DesHeaderar}}@else @endIf</textarea>
            </div>

            <br />
            <div>
                <label class="labell ">{{ __('Sectorbody') }}</label><br />
                <textarea class="edit" id="story" name="DesBody">@isset($services){{$services->DesBody}}@else @endIf</textarea>
            </div>

            <br />
            <div>
                <label class="labell ">{{ __('Sectorbodyar') }}</label><br />
                <textarea class="edit" id="story" name="DesBodyar">@isset($services){{$services->DesBodyar}}@else @endIf</textarea>
            </div>

            <br />
            <div>
                <label class="labell ">{{ __('Sectorcon') }}</label><br />
                <textarea class="edit" id="story" name="DesFooter">@isset($services){{$services->DesFooter}}@else @endIf</textarea>
            </div>

            <br />
            <div>
                <label class="labell ">{{ __('Sectorconar') }}</label><br />
                <textarea class="edit" id="story" name="DesFooterar">@isset($services){{$services->DesFooterar}}@else @endIf</textarea>
            </div>

            <br />
            <div>
                <label class="labell ">{{ __('Date') }}</label><br />
                <input class="edit" type="date" name="Date" value="{{$services->Date}}">
            </div> --}}
            <br />
            <div class="btndiv">
                <button class="btnedit submit-code" type="submit">{{ __('submit') }}</button>&nbsp;&nbsp;&nbsp;<button class="btnedit"><a href="/services">{{ __('Back') }}</a></button>
            </div><br><br><br>
        </form>

        </div>
        </form>
    </main>
</body>


</html>