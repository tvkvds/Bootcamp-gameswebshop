<!-- ACORDION MENU -->
<div class="col-12 col-md-4" my-2>

    <div class="accordion">

        <form method="get" action="/search">
        @csrf

        <!-- SEARCH BY NAME not implemented in view atm -->
        <div class="input-group">
            <input type="hidden" value="{{request('search')}}" class="form-control form-control-lg" name="search" placeholder="search...">    
        </div>

            <div class="accordion-item">

                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPlatform">
                        Platform
                    </button>
                </h2>

                <div id="accordionPlatform" class="accordion-collapse collapse show">
                    <div class="accordion-body">

                        @foreach ($platforms as $platform)

                            <div class="form-check m-2">
                                
                                <input class="form-check-input shadow-none" type="checkbox" name="platforms[{{$platform->platform}}]" value="{{$platform->id}}" id="[{{$platform->platform}}]">
                            
                                @if (request('platforms'))
                                    @foreach (request('platforms') as $blaat => $yeet)
                                        
                                        @if ($blaat === $platform->platform)
                                            <input class="form-check-input shadow-none" type="checkbox" name="platforms[{{$platform->platform}}]" value="{{$platform->id}}" id="[{{$platform->platform}}]" checked>
                                        @endif
                                    @endforeach
                                @endif
                                
                                <label class="form-check-label" for="[{{$platform->platform}}]">
                                    {{$platform->platform}}
                                </label>

                            </div>

                        @endforeach

                        <hr my-2>

                    </div>
                </div>

            </div>

            <div class="accordion-item">

                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordionCategory">
                        Category
                    </button>
                </h2>

                <div id="accordionCategory" class="accordion-collapse collapse show">
                    <div class="accordion-body">

                        @foreach ($categories as $category)
                            <div class="form-check m-2">
                                
                                <input class="form-check-input shadow-none" type="checkbox" name="categories[{{$category->slug}}]" value="{{$category->id}}" id="[{{$category->slug}}]">
                                
                                @if (request('categories'))
                                    @foreach (request('categories') as $name => $id)
                                        
                                        @if ($name === strtolower($category->name))
                                            <input class="form-check-input shadow-none" type="checkbox" name="categories[{{$category->slug}}]" value="{{$category->id}}" id="[{{$category->slug}}]" checked>
                                        @endif

                                    @endforeach
                                @endif
                                
                                <label class="form-check-label" for="[{{$category->slug}}]">
                                    {{$category->name}}
                                </label>
                                
                            </div>
                        @endforeach
                    
                        <hr my-2>
                    </div>
                </div>

                <div class="">
                    <button class="btn w-100 ">Apply filters</button>
                </div>

            </div>

        </form>

    </div>
    
</div>