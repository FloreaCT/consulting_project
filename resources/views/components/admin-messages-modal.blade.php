<!-- Plan Update Modal - START -->
<div id="modalOverlay" class="fixed inset-0 bg-[#000000de] z-50 transition" :class="{ 'hidden' : !isModal}" x-show="isModal">
    <div class="modalContainer animate-fadeIN transition mx-auto flex w-[90svw] h-[96svh] flex-col">
       

        <div class="relative flex flex-col h-100 overflow-hidden">
            <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
            <div class="overlay relative flex flex-col p-4">
                <div class="my-8 text-center">
                    <h1 class="font-bold text-3xl">Message</h1>
                </div>
                <button class="absolute top-0 right-0 ml-auto p-2 bg-white" @click="isModal = !isModal">Close</button>
            </div>
        </div>
        
        <form method="POST" id="messageModalForm" class="flex justify-start flex-col items-center bg-white  overflow-y-auto">
            @csrf
            <!-- Message Card - START-->
            <div class="grid grid-cols-1 gap-2">
                    <p id="ami" name="id" hidden readonly>id</p>
                <div class="p-4 flex flex-col w-[100%]">
                    <p id="amd" name="date" class="text-end" readonly>date</p>
                    <p id="ams" name="status" class="capitalize text-end" readonly>status</p>
                    <p id="amn" name="name" title="user_name" class="capitalize line-clamp-1" readonly>name</p>
                    <p id="ame" name="email" title="user_email" class=" line-clamp-1" readonly>email</p>
                </div>
                <div class="p-4 flex gap-2 flex-wrap justify-end">
                    <button type="submit" formaction="/admin/messages/delete" class="bg-[--c2] p-2 rounded text-white font-bold" onclick="e.preventDefault();document.getElementById('messageModalForm').action='/admin/messages/delete';">Delete</button>
                    <button type="submit" formaction="/admin/messages/toggle" class="bg-[--c2] p-2 rounded text-white font-bold" onclick="e.preventDefault();document.getElementById('messageModalForm').action='/admin/messages/toggle';">Toggle read/unread</button>
                    <button class="bg-[--c2] p-2 rounded text-white font-bold" >Reply</button>
                </div>
                <div class="mb-4 p-4">
                    <p id="amm" name="message" readonly>message</p>
                </div>
            </div>
            <!-- Message Card - END-->
        </form>
    </div>
</div>
<!-- Plan Update Modal - END -->