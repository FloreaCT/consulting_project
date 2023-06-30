@extends ('layout')

@section('content')

<!-- to fetch from db later -->
@php
$messages = [
    [
        "status" => "read",
        "email" => "2alemihai25@gmail.comaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaa",
        "name" => "Emily Brown aaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
        "id" => "583bf786-c07e-42d4-a55a-2ea942f099c3",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
    ],
    [
        "email" => "3alemihai25@gmail.com",
        "name" => "Bobby B",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
        "status" => "unread",
        "id" => "a9e7f134-31f7-43df-af25-acd5a89b05b2"
    ],
    [
        "status" => "read",
        "email" => "2alemihai25@gmail.com",
        "name" => "Emily Brown",
        "id" => "583bf786-c07e-42d4-a55a-2ea942f099c3",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
    ],
    [
        "email" => "3alemihai25@gmail.com",
        "name" => "Bobby B",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
        "status" => "unread",
        "id" => "a9e7f134-31f7-43df-af25-acd5a89b05b2"
    ],
    [
        "status" => "read",
        "email" => "2alemihai25@gmail.com",
        "name" => "Emily Brown",
        "id" => "583bf786-c07e-42d4-a55a-2ea942f099c3",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
    ],
    [
        "email" => "3alemihai25@gmail.com",
        "name" => "Bobby B",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
        "status" => "unread",
        "id" => "a9e7f134-31f7-43df-af25-acd5a89b05b2"
    ],
    [
        "status" => "read",
        "email" => "2alemihai25@gmail.com",
        "name" => "Emily Brown",
        "id" => "583bf786-c07e-42d4-a55a-2ea942f099c3",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
    ],
    [
        "email" => "3alemihai25@gmail.com",
        "name" => "Bobby B",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
        "status" => "unread",
        "id" => "a9e7f134-31f7-43df-af25-acd5a89b05b2"
    ],
    [
        "status" => "read",
        "email" => "2alemihai25@gmail.com",
        "name" => "Emily Brown",
        "id" => "583bf786-c07e-42d4-a55a-2ea942f099c3",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
    ],
    [
        "email" => "3alemihai25@gmail.com",
        "name" => "Bobby B",
        "message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex.",
        "date" => "2023-06-29T12:28:22.276Z",
        "status" => "unread",
        "id" => "a9e7f134-31f7-43df-af25-acd5a89b05b2"
    ],
]
@endphp

<span :class="{ 'hidden': !isActive }"></span>
<div :class="{ 'col-span-2': !isActive }"  x-data="{ isModal: false }">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Admin Messages</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Dashboard - START -->
  <div class="grid grid-cols-1 h-[80%] py-6 gap-2 overflow-y-scroll">
    <!-- Messages Header - START -->
      @foreach ($messages as $message)
        <div onclick="setModal('{{ json_encode($message) }}')" @click="isModal = !isModal" class="grid grid-cols-[3fr_10fr_1fr] h-[50px] gap-4 hover:scale-[.97] p-2 m-1 shadow-xl transition" >
            <p class="text-start flex flex-col line-clamp-2 {{ $message['status'] === 'unread' ? 'font-bold' : '' }}">
              <span class="text-sm line-clamp-1">{{ $message['name'] }}</span>
              <span class="text-sm line-clamp-1">{{ $message['email'] }}</span>
            </p>
            <p class="text-start flex flex-col line-clamp-2 {{ $message['status'] === 'unread' ? 'font-bold' : '' }}">
              <span class="text-sm line-clamp-1">{{ $message['message'] }}</span>
              <span class="text-sm text-end line-clamp-1">{{ $message['date'] }}</span>
            </p>
            <p class="capitalize text-center max-[671px]:text-start {{ $message['status'] === 'unread' ? 'font-bold' : '' }}">{{ $message['status'] }}</p>

        </div>
      @endforeach
    <!-- Messages Header - END -->
  </div>
  <!-- Dashboard - END -->


@include('components.admin-messages-modal')
<script defer type="application/javascript">
const setModal = (data) => {
  data = data.replace("\"[", "[").replace("]\"", "]")
  data = JSON.parse(data)

  let modalName = document.getElementById('amn');
  let modalEmail = document.getElementById('ame');
  let modalDate = document.getElementById('amd');
  let modalStatus = document.getElementById('ams');
  let modalMessage = document.getElementById('amm');
  let modalId = document.getElementById('ami')
  

  modalName.innerHTML = data.name
  modalEmail.innerHTML = data.email
  modalDate.innerHTML = data.date
  modalStatus.innerHTML = data.status
  modalMessage.innerHTML = data.message
  modalId.innerHTML = data.id
}
</script>
</div>
@endsection