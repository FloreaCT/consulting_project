<!-- Plan Update Modal - START -->
<div id="modalOverlay" class="fixed inset-0 bg-[#000000de] z-50 transition" :class="{ 'hidden' : !isModal}" x-show="isModal">
    <div class="modalContainer animate-fadeIN transition mx-auto flex w-[90svw] h-[96svh] flex-col">
       

        <div class="relative flex flex-col h-100 overflow-hidden">
            <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
            <div class="overlay relative flex flex-col p-4">
                <div class="my-8 text-center">
                    <h1 class="font-bold text-3xl">Update Plan</h1>
                </div>
                <button class="absolute top-0 right-0 ml-auto p-2 bg-white" @click="isModal = !isModal">Close</button>
            </div>
        </div>
        
        <!-- action is rendered dynamicaly depending on plan code -->
        <form method="POST" id="modalForm" action="" class="flex justify-start flex-col items-center bg-white  overflow-y-auto">
            <!-- Plan Card - START-->
            <div class="flex flex-col shadow-xl p-4 z-10 relative flex-nowrap">
                <input id="apc" type="text" class="hidden" name="code" readonly>
                <p>Plan Name</p>
                <input id="apn" name="name" class="w-[100%] text-xs font-bold whitespace-nowrap" type="text" />

                <p>Plan Description</p>
                <input id="apd" name="description" type="text" class="w-[100%] text-xs" />

                <p class="border-b-2 my-4"></p>
                <p>Plan/Token Price</p>
                <input id="app" name="price" type="number" class="w-[100%] text-xl font-bold text-center">

                <p class="border-b-2 my-4"></p>
                <p>Plan Attributes</p>
                <div id="apa" class="flex flex-col items-start text-start grow w-[100%]"></div>

                <p class="border-b-2 my-4"></p>
                <button class="bg-[--c2] p-2 rounded text-white font-bold" href="#">Update</button>
            </div>
            <!-- Plan Card - END-->
        </form>
    </div>
</div>
<!-- Plan Update Modal - END -->