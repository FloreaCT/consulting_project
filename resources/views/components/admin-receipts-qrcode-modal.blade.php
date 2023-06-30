<!-- QRCODE Modal - START -->
<div id="modalOverlay" class="fixed inset-0 bg-[#000000de] z-50 transition" :class="{ 'hidden' : !isModal}" x-show="isModal">
    <div class="modalContainer animate-fadeIN transition mx-auto flex w-[90svw] h-[96svh] flex-col">

        <div class="relative flex flex-col h-100 overflow-hidden">
            <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
            <div class="overlay relative flex flex-col p-4">
                <div class="my-8 text-center">
                    <h1 class="font-bold text-3xl">QR Code</h1>
                </div>
                <button class="absolute top-0 right-0 ml-auto p-2 bg-white" @click="isModal = !isModal">Close</button>
            </div>
        </div>
        
        <div id="qrModalForm" class="flex justify-start flex-col items-center bg-white  overflow-y-auto">
            <div class="grid grid-cols-1 gap-2">
               
                <button id="qrdownload" class="px-2 my-4 rounded-xl text-white text-sm bg-[--c2] text-center" onclick="download()">Download QR</button>
                <p class="text-center my-4 pb-4">- or -</p>

                <img src="" id="qrimg" class="my-4">
            </div>
        </div>
    </div>
</div>
<!-- QRCODE Modal - END -->