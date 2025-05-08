<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
    <title>Course Create</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Course</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Course" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            Create Course
                        </div>
                        <form action="{{ route('course.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="course_name">Course Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Course Name">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Course Video <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Course video link" name="video_url">
                                            @error('video_url')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="course_description"> Course Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" id="course_description" name="description" rows="3"></textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-sm btn-primary mb-3 addModule"
                                            id="">Add New
                                            Module</button>
                                        <div class="accordion accordionExample" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#module1"
                                                        aria-expanded="true" aria-controls="module1">
                                                        Module 1
                                                    </button>
                                                </h2>
                                                <div id="module1" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="form-group mb-3">
                                                            <label for="module_title">Module Title</label>
                                                            <input type="text" class="form-control"
                                                                id="module_title" name="modules[0][title]"
                                                                placeholder="Enter Module Title">
                                                        </div>
                                                        {{-- Content --}}
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary mb-3 addContent"
                                                            data-module-index="0"data-content-count="1">Add New
                                                            Content</button>
                                                        <div class="accordion accordionContent" id="accordionContent">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingContent">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#content1"
                                                                        aria-expanded="true" aria-controls="content1">
                                                                        Content
                                                                    </button>
                                                                </h2>
                                                                <div id="content1"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingContent"
                                                                    data-bs-parent="#accordionContent">
                                                                    <div class="accordion-body">
                                                                        <div class="form-group mb-3">
                                                                            <label for="content_title">Content
                                                                                Title</label>
                                                                            <input type="text" class="form-control"
                                                                                id="content_title"
                                                                                name="modules[0][contents][0][title]"
                                                                                placeholder="Enter Content Title">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">Create Course</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            let moduleCount = 0;

            // Add new module
            $('.addModule').click(function() {
                moduleCount++;

                const moduleHtml = `
        <div class="accordion-item module-item" data-module-index="${moduleCount}">
            <h2 class="accordion-header" id="heading${moduleCount}">
                <button class="accordion-button" type="button"
                    data-bs-toggle="collapse" data-bs-target="#module${moduleCount}"
                    aria-expanded="true" aria-controls="module${moduleCount}">
                    Module ${moduleCount + 1}
                </button>
            </h2>
            <div id="module${moduleCount}" class="accordion-collapse collapse"
                aria-labelledby="heading${moduleCount}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="form-group mb-3">
                        <label>Module Title</label>
                        <input type="text" class="form-control" name="modules[${moduleCount}][title]" placeholder="Enter Module Title">
                    </div>
                    <button type="button" class="btn btn-sm btn-primary mb-3 addContent" data-module-index="${moduleCount}" data-content-count="0">
                        Add New Content
                    </button>
                    <div class="accordion accordionContent"></div>
                </div>
            </div>
        </div>`;

                $('.accordionExample').append(moduleHtml);
            });

            // Add new content to a specific module
            $(document).on('click', '.addContent', function() {
                const moduleIndex = $(this).data('module-index');
                let contentCount = parseInt($(this).attr('data-content-count')) || 0;

                const contentHtml = `
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingContent${moduleIndex}_${contentCount}">
                <button class="accordion-button" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#content${moduleIndex}_${contentCount}" aria-expanded="true"
                    aria-controls="content${moduleIndex}_${contentCount}">
                    Content ${contentCount + 1}
                </button>
            </h2>
            <div id="content${moduleIndex}_${contentCount}"
                class="accordion-collapse collapse show"
                aria-labelledby="headingContent${moduleIndex}_${contentCount}">
                <div class="accordion-body">
                    <div class="form-group mb-3">
                        <label>Content Title</label>
                        <input type="text" class="form-control"
                            name="modules[${moduleIndex}][contents][${contentCount}][title]"
                            placeholder="Enter Content Title">
                    </div>
                </div>
            </div>
        </div>`;

                $(this).siblings('.accordionContent').append(contentHtml);
                $(this).attr('data-content-count', contentCount + 1);
            });
        });
    </script>
</body>

</html>
