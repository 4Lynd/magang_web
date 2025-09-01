@include('layouts.header')
<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

        {{-- Header --}}
        @include('layouts.navbar')

        <!-- Main container start -->
        <div class="main-container">

            {{-- Sidebar --}}
            @include('layouts.sidebar')

            <!-- App container start -->
            <div class="app-container">
                @yield('content')
            </div>
            <!-- App container end -->

			{{-- Footer (script) --}}
			@include('layouts.footer')
		</div>
        <!-- Main container end -->

        

    </div>
    <!-- Page wrapper end -->
</body>


