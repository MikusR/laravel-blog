<x-layout>
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">

            <!--Nav-->
            <x-nav/>
            <!--/Nav-->

            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">

                <!--Lead Card-->
                <x-lead-card :post="$posts[0]"/>
                <!--/Lead Card-->


                <!--Posts Container-->
                <div class="flex flex-wrap justify-between pt-12 -mx-6">

                    <!--1/3 col -->
                    <x-1-3-col-card/>


                    <!--1/3 col -->
                    <x-1-3-col-card/>

                    <!--1/3 col -->
                    <x-1-3-col-card/>


                    <!--1/2 col -->
                    <x-1-2-col-card/>

                    <!--1/2 col -->
                    <x-1-2-col-card/>


                    <!--2/3 col -->
                    <x-2-3-col-card/>

                    <!--1/3 col -->
                    <x-1-3-col-card/>

                </div>
                <!--/ Post Content-->

            </div>


            <!--Subscribe-->
            <x-subscribe-card/>
            <!-- /Subscribe-->


            <!--Author-->

            <!--/Author-->

        </div>


    </div>

</x-layout>
