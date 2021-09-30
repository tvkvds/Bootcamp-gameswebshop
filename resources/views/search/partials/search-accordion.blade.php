<!-- ACORDION MENU -->
<div class="col-12 col-md-4" my-2>
    <div class="accordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPlatform">
                    Platform
                </button>
            </h2>
            <div id="accordionPlatform" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <!-- CHECKBOXES -->
                    {{-- <div class="form-check m-2">
                        <input class="form-check-input shadow-none" type="checkbox" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Xbox
                        </label>
                    </div>
                    <div class="form-check m-2">
                        <input class="form-check-input shadow-none" type="checkbox" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Play Station
                        </label>
                    </div> --}}
                    @foreach ($platforms as $platform)
                        <div class="form-check m-2">
                            <input class="form-check-input shadow-none" type="checkbox" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
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
                    <!-- CHECKBOXES -->
                    {{-- <div class="form-check m-2">
                        <input class="form-check-input shadow-none" type="checkbox" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Action
                        </label>
                    </div>
                    <div class="form-check m-2">
                        <input class="form-check-input shadow-none" type="checkbox" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Adventure
                        </label>
                    </div> --}}
                    @foreach ($categories as $category)
                        <div class="form-check m-2">
                            <input class="form-check-input shadow-none" type="checkbox" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                {{$category->name}}
                            </label>
                        </div>
                    @endforeach
                   
                    <hr my-2>
                </div>
            </div>
        </div>
    </div>
</div>