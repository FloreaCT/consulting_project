@extends ('layout')


@section('content')
<!-- Hero START -->
<div class="relative flex flex-col h-100 overflow-hidden">
  <video src="storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
  <div class="overlay relative flex flex-col">
    <!-- Heading - START -->
    <div class="my-8 text-center">
      <h1 class="font-bold text-3xl">Download</h1>
      <p>Experience the best features of our app on your mobile device. Download it now!</p>
      
    </div>
    <!-- Heading - END -->
  </div>
</div>
<!-- Hero END -->

<p class="mt-8 mb-4 text-xl text-center">Download the app for your platform below</p>
<div class="flex gap-4 justify-center items-center mb-8">
  <button onclick="alert('Download Android App - Under Maintenance')" type="button" class="hover:scale-[0.92] transition duration-500">
    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="50" width="50" version="1.1" id="Layer_1" viewBox="0 0 511.999 511.999" xml:space="preserve">
      <g>
        <path style="fill:#32BBFF;" d="M382.369,175.623C322.891,142.356,227.427,88.937,79.355,6.028   C69.372-0.565,57.886-1.429,47.962,1.93l254.05,254.05L382.369,175.623z"></path>
        <path style="fill:#32BBFF;" d="M47.962,1.93c-1.86,0.63-3.67,1.39-5.401,2.308C31.602,10.166,23.549,21.573,23.549,36v439.96   c0,14.427,8.052,25.834,19.012,31.761c1.728,0.917,3.537,1.68,5.395,2.314L302.012,255.98L47.962,1.93z"></path>
        <path style="fill:#32BBFF;" d="M302.012,255.98L47.956,510.035c9.927,3.384,21.413,2.586,31.399-4.103   c143.598-80.41,237.986-133.196,298.152-166.746c1.675-0.941,3.316-1.861,4.938-2.772L302.012,255.98z"></path>
      </g>
      <path style="fill:#2C9FD9;" d="M23.549,255.98v219.98c0,14.427,8.052,25.834,19.012,31.761c1.728,0.917,3.537,1.68,5.395,2.314  L302.012,255.98H23.549z"></path>
      <path style="fill:#29CC5E;" d="M79.355,6.028C67.5-1.8,53.52-1.577,42.561,4.239l255.595,255.596l84.212-84.212  C322.891,142.356,227.427,88.937,79.355,6.028z"></path>
      <path style="fill:#D93F21;" d="M298.158,252.126L42.561,507.721c10.96,5.815,24.939,6.151,36.794-1.789  c143.598-80.41,237.986-133.196,298.152-166.746c1.675-0.941,3.316-1.861,4.938-2.772L298.158,252.126z"></path>
      <path style="fill:#FFD500;" d="M488.45,255.98c0-12.19-6.151-24.492-18.342-31.314c0,0-22.799-12.721-92.682-51.809l-83.123,83.123  l83.204,83.205c69.116-38.807,92.6-51.892,92.6-51.892C482.299,280.472,488.45,268.17,488.45,255.98z"></path>
      <path style="fill:#FFAA00;" d="M470.108,287.294c12.191-6.822,18.342-19.124,18.342-31.314H294.303l83.204,83.205  C446.624,300.379,470.108,287.294,470.108,287.294z"></path>
    </svg>
  </button>
  <button onclick="alert('Download IOS App - Under Maintenance')" type="button" class="hover:scale-[0.92] transition duration-500">
    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" fill="#000000" width="50" height="50" viewBox="0 0 20 20">
      <path d="M17.564 13.862c-.413.916-.612 1.325-1.144 2.135-.742 1.13-1.79 2.538-3.087 2.55-1.152.01-1.448-.75-3.013-.741-1.564.008-1.89.755-3.043.744-1.297-.012-2.29-1.283-3.033-2.414-2.077-3.16-2.294-6.87-1.013-8.843.91-1.401 2.347-2.221 3.697-2.221 1.375 0 2.24.754 3.376.754 1.103 0 1.775-.756 3.365-.756 1.2 0 2.474.655 3.381 1.785-2.972 1.629-2.49 5.873.514 7.007zM12.463 3.808c.577-.742 1.016-1.788.857-2.858-.944.065-2.047.665-2.692 1.448-.584.71-1.067 1.763-.88 2.787 1.03.031 2.096-.584 2.715-1.377z" />
    </svg>
  </button>
  <button onclick="alert('Download Windows App - Under Maintenance')" type="button" class="hover:scale-[0.92] transition duration-500">
    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" height="50" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Icons" viewBox="0 0 32 32" xml:space="preserve">
      <style type="text/css">
        .st0 {
          fill: #FFFFFF;
        }

        .st1 {
          fill: #3A559F;
        }

        .st2 {
          fill: #F4F4F4;
        }

        .st3 {
          fill: #FF0084;
        }

        .st4 {
          fill: #0063DB;
        }

        .st5 {
          fill: #00ACED;
        }

        .st6 {
          fill: #FFEC06;
        }

        .st7 {
          fill: #FF0000;
        }

        .st8 {
          fill: #25D366;
        }

        .st9 {
          fill: #0088FF;
        }

        .st10 {
          fill: #314358;
        }

        .st11 {
          fill: #EE6996;
        }

        .st12 {
          fill: #01AEF3;
        }

        .st13 {
          fill: #FFFEFF;
        }

        .st14 {
          fill: #F06A35;
        }

        .st15 {
          fill: #00ADEF;
        }

        .st16 {
          fill: #1769FF;
        }

        .st17 {
          fill: #1AB7EA;
        }

        .st18 {
          fill: #6001D1;
        }

        .st19 {
          fill: #E41214;
        }

        .st20 {
          fill: #05CE78;
        }

        .st21 {
          fill: #7B519C;
        }

        .st22 {
          fill: #FF4500;
        }

        .st23 {
          fill: #00F076;
        }

        .st24 {
          fill: #FFC900;
        }

        .st25 {
          fill: #00D6FF;
        }

        .st26 {
          fill: #FF3A44;
        }

        .st27 {
          fill: #FF6A36;
        }

        .st28 {
          fill: #0061FE;
        }

        .st29 {
          fill: #F7981C;
        }

        .st30 {
          fill: #EE1B22;
        }

        .st31 {
          fill: #EF3561;
        }

        .st32 {
          fill: none;
          stroke: #FFFFFF;
          stroke-width: 2;
          stroke-miterlimit: 10;
        }

        .st33 {
          fill: #0097D3;
        }

        .st34 {
          fill: #01308A;
        }

        .st35 {
          fill: #019CDE;
        }

        .st36 {
          fill: #FFD049;
        }

        .st37 {
          fill: #16A05D;
        }

        .st38 {
          fill: #4486F4;
        }

        .st39 {
          fill: none;
        }

        .st40 {
          fill: #34A853;
        }

        .st41 {
          fill: #4285F4;
        }

        .st42 {
          fill: #FBBC05;
        }

        .st43 {
          fill: #EA4335;
        }
      </style>
      <g>
        <g>
          <g>
            <path class="st15" d="M30,15H17c-0.6,0-1-0.4-1-1V3.3c0-0.5,0.4-0.9,0.8-1l13-2.3c0.3,0,0.6,0,0.8,0.2C30.9,0.4,31,0.7,31,1v13     C31,14.6,30.6,15,30,15z" />
          </g>
          <g>
            <path class="st15" d="M13,15H1c-0.6,0-1-0.4-1-1V6c0-0.5,0.4-0.9,0.8-1l12-2c0.3,0,0.6,0,0.8,0.2C13.9,3.4,14,3.7,14,4v10     C14,14.6,13.6,15,13,15z" />
          </g>
          <g>
            <path class="st15" d="M30,32c-0.1,0-0.1,0-0.2,0l-13-2.3c-0.5-0.1-0.8-0.5-0.8-1V18c0-0.6,0.4-1,1-1h13c0.6,0,1,0.4,1,1v13     c0,0.3-0.1,0.6-0.4,0.8C30.5,31.9,30.2,32,30,32z" />
          </g>
          <g>
            <path class="st15" d="M13,29c-0.1,0-0.1,0-0.2,0l-12-2C0.4,26.9,0,26.5,0,26v-8c0-0.6,0.4-1,1-1h12c0.6,0,1,0.4,1,1v10     c0,0.3-0.1,0.6-0.4,0.8C13.5,28.9,13.2,29,13,29z" />
          </g>
        </g>
      </g>
    </svg>
  </button>
</div>

<section class="grid grid-cols-4 gap-4 p-4 max-lg:grid-cols-2 max-sm:grid-cols-1 ">
  <div>
    <h3>
        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="100" width="100" version="1.1" id="Layer_1" viewBox="0 0 511.6 511.6" xml:space="preserve">
            <polygon style="fill:#CCD1D9;" points="378.875,479.625 170.523,479.625 191.787,373.146 357.58,373.114 "></polygon>
            <path style="fill:#ff7300;" d="M511.6,383.7c0,5.901-4.777,10.679-10.663,10.679H10.648c-5.87,0-10.647-4.777-10.647-10.679V42.638  c0-5.886,4.777-10.664,10.647-10.664h490.289c5.886,0,10.663,4.777,10.663,10.664V383.7z"></path>
            <path style="fill:#E6E9ED;" d="M10.648,394.379h490.289c5.886,0,10.663-4.777,10.663-10.679V330.43H0V383.7  C0,389.602,4.778,394.379,10.648,394.379z"></path>
            <g>
                <rect x="42.623" y="245.14" style="fill:#A0D468;" width="213.18" height="86.29"></rect>
                <rect x="277.11" y="245.14" style="fill:#A0D468;" width="213.16" height="86.29"></rect>
            </g>
            <path style="fill:#ff7300;" d="M266.447,362.404c0,5.87-4.762,10.647-10.647,10.647c-5.885,0-10.663-4.777-10.663-10.647  c0-5.902,4.777-10.68,10.663-10.68C261.686,351.724,266.447,356.502,266.447,362.404z"></path>
            <rect x="42.623" y="74.61" style="fill:#75EBE5;" width="426.34" height="149.21"></rect>
            <path style="fill:#E6E9ED;" d="M170.523,458.329c-5.886,0-10.647,4.746-10.647,10.647c0,5.871,4.762,10.648,10.647,10.648h197.705  v-21.296L170.523,458.329L170.523,458.329z"></path>
            <path style="fill:#ff7300;" d="M394.348,159.875H117.237c-5.886,0-10.664-4.778-10.664-10.664s4.778-10.647,10.664-10.647h277.111  c5.887,0,10.664,4.762,10.664,10.647C405.012,155.097,400.235,159.875,394.348,159.875z"></path>
            <rect x="347.06" y="191.85" style="fill:#75EBE5;" width="147.67" height="170.56"></rect>
            <rect x="347.06" y="362.4" style="fill:#A0D468;" width="147.67" height="88.02"></rect>
            <g>
                <path style="fill:#ff7300;" d="M490.274,170.538H351.725c-11.771,0-21.327,9.54-21.327,21.312v266.479   c0,11.772,9.556,21.296,21.327,21.296h138.549c11.787,0,21.326-9.523,21.326-21.296V191.85   C511.6,180.078,502.061,170.538,490.274,170.538z M490.274,458.329H351.725V191.85h138.549V458.329z"></path>
                <rect x="346.59" y="437" style="fill:#ff7300;" width="149.07" height="26.886"></rect>
            </g>
            <path style="fill:#E6E9ED;" d="M431.584,458.329c0,5.87-4.777,10.647-10.663,10.647s-10.647-4.777-10.647-10.647  c0-5.901,4.762-10.679,10.647-10.679S431.584,452.428,431.584,458.329z"></path>
            <path style="fill:#ff7300;" d="M458.267,287.776h-74.692c-5.885,0-10.663-4.778-10.663-10.648c0-5.901,4.778-10.648,10.663-10.648  h74.692c5.886,0,10.663,4.747,10.663,10.648C468.93,282.997,464.153,287.776,458.267,287.776z"></path>
        </svg>
    </h3>
    <h1 class="font-bold text-center my-4">User-friendly interface</h1>

    <span class="text-xs">Our app has a user-friendly interface that makes it easy for you to find what you're looking for and
        place an order. No technical know-how required!</span>
  </div>
  <div>
    <h3>
        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="100" width="100" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
            <polygon style="fill:#75EBE5;" points="361.342,392.427 10.2,392.427 150.657,287.66 501.8,287.66 "></polygon>
            <polygon style="fill:#FFFFFF;" points="361.342,308.383 10.2,308.383 150.657,203.616 501.8,203.616 "></polygon>
            <polygon style="fill:#F92859;" points="361.342,224.34 10.2,224.34 150.657,119.572 501.8,119.572 "></polygon>
            <g>
                <path style="fill:#ff7300;" d="M511.48,200.403c-1.384-4.171-5.285-6.986-9.68-6.986h-81.942l88.04-65.669   c3.523-2.627,4.966-7.217,3.582-11.388c-1.384-4.171-5.285-6.986-9.68-6.986H150.657c-2.198,0-4.337,0.71-6.098,2.024   L4.102,216.164c-3.523,2.627-4.966,7.217-3.582,11.388s5.285,6.986,9.68,6.986h81.942l-88.04,65.669   c-3.523,2.627-4.966,7.217-3.582,11.388s5.285,6.986,9.68,6.986h81.942l-88.04,65.669c-3.523,2.627-4.966,7.217-3.582,11.388   c1.384,4.171,5.285,6.986,9.68,6.986h351.144c2.198,0,4.337-0.71,6.098-2.023l140.457-104.769   c3.523-2.627,4.966-7.217,3.582-11.388c-1.384-4.171-5.285-6.986-9.68-6.986h-81.942l88.04-65.669   C511.421,209.163,512.864,204.575,511.48,200.403z M154.042,129.771h317.026l-113.11,84.37H40.932L154.042,129.771z    M471.068,297.86l-113.11,84.37H40.932l85.327-63.646h235.084c2.198,0,4.337-0.71,6.098-2.024l25.07-18.699h78.557V297.86z    M357.957,298.185H40.932l85.327-63.646h235.084c2.198,0,4.337-0.71,6.098-2.024l25.07-18.699h78.557L357.957,298.185z"></path>
                <path style="fill:#ff7300;" d="M347.162,351.872H195.825c-5.633,0-10.199,4.566-10.199,10.199s4.566,10.199,10.199,10.199h151.337   c5.633,0,10.199-4.566,10.199-10.199S352.794,351.872,347.162,351.872z"></path>
                <path style="fill:#ff7300;" d="M161.148,351.872h-5.1c-5.633,0-10.199,4.566-10.199,10.199s4.566,10.199,10.199,10.199h5.1   c5.633,0,10.199-4.566,10.199-10.199S166.781,351.872,161.148,351.872z"></path>
            </g>
        </svg>
    </h3>
    <h1 class="font-bold text-center my-4">Selection of products</h1>
    <span class="text-xs">We offer a platform for a wide selection of products and suppliers to choose from, so you'll be sure
        to find something you love.</span>
  </div>
  <div>
    <h3>
        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="100" width="100" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
            <path style="fill:#75EBE5;" d="M201.463,470.752L201.463,470.752c0-47.839-39.141-86.982-86.982-86.982l0,0  c-47.839,0-86.982,39.141-86.982,86.982l0,0c0,14.917,12.093,27.01,27.01,27.01h119.942  C189.371,497.762,201.463,485.669,201.463,470.752z"></path>
            <g>
                <path style="fill:#ff7300;" d="M174.453,512H54.511c-22.744,0-41.248-18.504-41.248-41.248   c0-55.813,45.407-101.219,101.219-101.219c55.813,0,101.22,45.407,101.22,101.219C215.701,493.496,197.197,512,174.453,512z    M114.483,398.008c-40.111,0-72.743,32.631-72.743,72.742c0,7.042,5.729,12.772,12.772,12.772h119.942   c7.042,0,12.772-5.729,12.772-12.772C187.225,430.641,154.594,398.008,114.483,398.008z"></path>
                <path style="fill:#ff7300;" d="M114.481,396.958c-42.8,0-77.62-34.82-77.62-77.62s34.82-77.62,77.62-77.62s77.62,34.82,77.62,77.62   S157.282,396.958,114.481,396.958z M114.481,270.196c-27.097,0-49.143,22.045-49.143,49.143s22.045,49.143,49.143,49.143   s49.143-22.045,49.143-49.143S141.58,270.196,114.481,270.196z"></path>
            </g>
            <path style="fill:#75EBE5;" d="M484.499,470.752L484.499,470.752c0-47.839-39.141-86.982-86.982-86.982l0,0  c-47.839,0-86.982,39.141-86.982,86.982l0,0c0,14.917,12.093,27.01,27.01,27.01h119.942  C472.406,497.762,484.499,485.669,484.499,470.752z"></path>
            <g>
                <path style="fill:#ff7300;" d="M457.489,512H337.547c-22.744,0-41.248-18.504-41.248-41.248   c0-55.813,45.407-101.219,101.219-101.219c55.813,0,101.22,45.407,101.22,101.219C498.737,493.496,480.233,512,457.489,512z    M397.517,398.008c-40.111,0-72.743,32.631-72.743,72.742c0,7.042,5.729,12.772,12.772,12.772h119.942   c7.042,0,12.772-5.729,12.772-12.772C470.26,430.641,437.628,398.008,397.517,398.008z"></path>
                <path style="fill:#ff7300;" d="M397.517,396.958c-42.8,0-77.62-34.82-77.62-77.62s34.82-77.62,77.62-77.62s77.62,34.82,77.62,77.62   S440.317,396.958,397.517,396.958z M397.517,270.196c-27.097,0-49.143,22.045-49.143,49.143s22.045,49.143,49.143,49.143   c27.098,0,49.143-22.045,49.143-49.143S424.615,270.196,397.517,270.196z"></path>
                <path style="fill:#ff7300;" d="M372.162,225.802c-5.052,0-9.981-1.934-13.778-5.587l-47.657-45.857   c-5.667-5.453-5.841-14.466-0.387-20.133c5.453-5.667,14.466-5.841,20.133-0.387l35.234,33.904l2.917-25.276   c0.83-7.185,6.913-12.607,14.144-12.607h31.414V28.477H97.818v121.383h31.414c7.232,0,13.316,5.422,14.144,12.607l2.917,25.276   l35.235-33.904c5.667-5.452,14.68-5.278,20.133,0.387c5.452,5.665,5.28,14.68-0.387,20.133l-47.657,45.857   c-5.502,5.292-13.381,6.978-20.567,4.397c-7.185-2.581-12.192-8.896-13.066-16.479l-3.44-29.796H95.643   c-14.503,0-26.301-11.798-26.301-26.3V26.301C69.342,11.798,81.14,0,95.641,0h320.716c14.503,0,26.301,11.798,26.301,26.301   v125.735c0,14.503-11.798,26.301-26.301,26.301h-20.902l-3.44,29.796c-0.876,7.583-5.882,13.898-13.066,16.479   C376.724,225.412,374.43,225.802,372.162,225.802z"></path>
                <path style="fill:#ff7300;" d="M264.008,178.336h-16.015c-7.864,0-14.238-6.374-14.238-14.238c0-7.864,6.374-14.238,14.238-14.238   h16.015c7.864,0,14.238,6.374,14.238,14.238C278.246,171.961,271.871,178.336,264.008,178.336z"></path>
            </g>
        </svg>
    </h3>
    <h1 class="font-bold text-center my-4">Multi Support 24/7</h1>
    <span class="text-xs">Whether you have a question about your order, need help using the app, or just want to give us
        feedback, we're always available to assist you. Don't hesitate to reach out - we're here to help!</span>
  </div>
  <div>
    <h3>
        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 146 146">

            <title>001-business</title>

            <rect x="0.5" y="0.5" width="145" height="145" fill="none"></rect>

            <line x1="77.12" y1="1.21" x2="80.32" y2="4.41" fill="none" stroke="#ea9080" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.6"></line>

            <line x1="80.32" y1="1.21" x2="77.12" y2="4.41" fill="none" stroke="#ea9080" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.6"></line>

            <circle cx="14.92" cy="143" r="1.6" fill="#ff7300"></circle>

            <circle cx="29.72" cy="142.6" r="2" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3.6"></circle>

            <circle cx="97.32" cy="6.2" r="1.6" fill="#ff7300"></circle>

            <path d="M11.34,124.35l2.19-1.15a0.16,0.16,0,0,1,.23.17l-0.42,2.43,1.77,1.72a0.16,0.16,0,0,1-.09.27l-2.44.36-1.09,2.21a0.16,0.16,0,0,1-.29,0l-1.09-2.21-2.44-.36a0.16,0.16,0,0,1-.09-0.27l1.77-1.72-0.42-2.43a0.16,0.16,0,0,1,.23-0.17Z" fill="#fff"></path>

            <circle cx="101.72" cy="19.4" r="2" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3.6"></circle>

            <path d="M93.19,65.73v19.2h-8V74.75a10.72,10.72,0,0,1,7.7-10Z" fill="#ffffff"></path>

            <path d="M103.59,102.93a6.78,6.78,0,0,1-3.2,5.76v9.84a0.8,0.8,0,0,1-.8.8H94a0.8,0.8,0,0,1-.8-0.8v-9.84A6.8,6.8,0,1,1,103.59,102.93Z" fill="#ffffff"></path>

            <path d="M82.79,61.22A19.38,19.38,0,0,1,93.2,55.66a18.9,18.9,0,0,1,3.58-.34,19.6,19.6,0,0,1,19.6,19.6v10h-8V74.75c0-5.87-5.19-10.62-11.6-10.62a12.46,12.46,0,0,0-3.9.62,10.72,10.72,0,0,0-7.7,10V84.93h-8v-10A19.47,19.47,0,0,1,82.79,61.22Z" fill="#d8dadf"></path>

            <path d="M125.19,88.93v39.2a4,4,0,0,1-4,4H72.39l-0.41,0a4,4,0,0,1-3.59-4V88.93a4,4,0,0,1,4-4h48.8A4,4,0,0,1,125.19,88.93Zm-24.8,19.76a6.8,6.8,0,1,0-7.2,0v9.84a0.8,0.8,0,0,0,.8.8h5.6a0.8,0.8,0,0,0,.8-0.8v-9.84Z" fill="#ed9180"></path>

            <path d="M82.79,46.53v14.7a19.47,19.47,0,0,0-5.6,13.7v10h-4.8a4,4,0,0,0-4,4v23.2H31.63a0.82,0.82,0,0,1-.84-0.8V29.73a0.82,0.82,0,0,1,.84-0.8H81.95a0.82,0.82,0,0,1,.84.8v16.8Z" fill="#A0D468"></path>

            <path d="M68.39,128.13a4,4,0,0,0,3.59,4v0H27.2A5,5,0,0,1,22,127.36V17.69a5,5,0,0,1,5.21-4.77H88a5,5,0,0,1,5.21,4.77V55.57l0,0.09a19.38,19.38,0,0,0-10.42,5.56V29.73a0.82,0.82,0,0,0-.84-0.8H31.63a0.82,0.82,0,0,0-.84.8v81.6a0.82,0.82,0,0,0,.84.8H68.39v16Z" fill="#ffffff"></path>

            <polyline points="93.19 55.57 93.19 17.69 93.19 16.69" fill="none" stroke="#ff7300" stroke-miterlimit="10" stroke-width="2.4"></polyline>

            <path d="M77.19,84.13v-9.2a19.62,19.62,0,0,1,16-19.26,18.9,18.9,0,0,1,3.58-.34,19.6,19.6,0,0,1,19.6,19.6v9.2" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4.4"></path>

            <path d="M103.59,102.93a6.8,6.8,0,1,0-10.4,5.76v9.84a0.8,0.8,0,0,0,.8.8h5.6a0.8,0.8,0,0,0,.8-0.8v-9.84A6.78,6.78,0,0,0,103.59,102.93Z" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.4"></path>

            <path d="M85.19,84.13V74.75a10.72,10.72,0,0,1,7.7-10,12.46,12.46,0,0,1,3.9-.62c6.41,0,11.6,4.75,11.6,10.62v9.38" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4.4"></path>

            <line x1="93.19" y1="65.73" x2="93.19" y2="84.93" fill="none" stroke="#ff7300" stroke-miterlimit="10" stroke-width="2.4"></line>

            <line x1="134" y1="131" x2="134" y2="137" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>

            <line x1="137" y1="134" x2="131" y2="134" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>

            <path d="M52,78.34a6.14,6.14,0,0,0,4.3,3c3.12,0.61,6.07-1,6.58-3.6S61.24,72.57,58.12,72l-1.6-.32c-3.12-.61-5.24-3.22-4.72-5.82s3.46-4.21,6.58-3.6a6.26,6.26,0,0,1,4,2.57" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4.4"></path>

            <line x1="57.3" y1="59.32" x2="57.3" y2="61.24" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4.4"></line>

            <line x1="57.94" y1="82.36" x2="57.94" y2="84.28" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4.4"></line>

            <line x1="49.19" y1="21.73" x2="64.39" y2="21.73" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4.4"></line>

            <circle cx="57.32" cy="122.2" r="2.4" fill="#ff7300"></circle>

            <path d="M82.09,30H31.75c-0.46,0-1.75,0-1.75.41V34H83V30.41C83,30,82.55,30,82.09,30Z" fill="#A0D468"></path>

            <path d="M68,132.13V87.33h-2.4c-1.33,0-2.4,1.82-2.4,3.08v41.72H68Z" fill="#fff"></path>

            <path d="M68,112.79V87.33h-2.4a2.63,2.63,0,0,0-2.4,2.09v23.37H68Z" fill="#A0D468"></path>

            <path d="M93.19,17.69A5,5,0,0,0,88,12.93H27.2A5,5,0,0,0,22,17.69V127.36a5,5,0,0,0,5.21,4.77H72" fill="none" stroke="#ff7300" stroke-miterlimit="10" stroke-width="4.4"></path>

            <path d="M68.35,112.13H32.43a0.82,0.82,0,0,1-.84-0.8V29.73a0.82,0.82,0,0,1,.84-0.8H82.75a0.82,0.82,0,0,1,.84.8v32" fill="none" stroke="#ff7300" stroke-miterlimit="10" stroke-width="4.4"></path>

            <g opacity="0.8">

                <path d="M71,131.93V94.33c0-2.21,2.29-3.67,4.49-3.67L119.59,89h4.8a0.82,0.82,0,0,0-.39-0.23v0c0-2.21-.6-3.73-2.81-3.73H72.39C70.18,85,68,86.53,68,88.73v39.2a4.11,4.11,0,0,0,3.31,4.14S71,132,71,131.93Z" fill="#eeb8a9"></path>

            </g>

            <path d="M116.39,84.93h4.8a4,4,0,0,1,4,4v39.2a4,4,0,0,1-4,4H72.39l-0.41,0a4,4,0,0,1-3.59-4V88.93a4,4,0,0,1,4-4h44Z" fill="none" stroke="#ff7300" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.4"></path>

        </svg>
    </h3>
    <h1 class="font-bold text-center my-4">Secure payment options</h1>
    <span class="text-xs">Checking out is a breeze with our fast and efficient checkout process. You'll be able to complete your
        order in no time!</span>
  </div>
</section>

@endsection