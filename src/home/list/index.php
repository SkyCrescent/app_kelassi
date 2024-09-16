<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../output.css">
    <link rel="stylesheet" href="../../../output.css">

    <title>Home Page</title>

    <script >

        function toggleWidth(){

            const bar = document.getElementById('bar');
            const thePicture = document.getElementById('picture');
             const thePicture2 = document.getElementById('picture2');
            const bar2 = document.getElementById('elements1');
            const bar3 = document.getElementById('elements2');
            const bar4 = document.getElementById('elements3');
            const bar5 = document.getElementById('elements4');
            const bar6 = document.getElementById('elements5');
            const bar7 = document.getElementById('elements6');
            const theBody = document.getElementById('body');


                if(bar.classList.contains('w-[16%]')){
                    bar.classList.remove('w-[16%]');
                    bar.classList.add('w-[6%]')

                   theBody.classList.remove('w-[84%]');
                    theBody.classList.add('w-[94%]')


                     thePicture.classList.remove('h-36');
                     thePicture.classList.add('h-16')

                    thePicture.classList.remove('w-36');
                     thePicture.classList.add('w-16')

                     thePicture.classList.remove('mx-6');
                     thePicture.classList.add('mx-2')

                    thePicture2.classList.remove('h-16');
                     thePicture2.classList.add('h-8')


                    thePicture2.classList.remove('w-52');
                     thePicture2.classList.add('w-16')





                    bar2.classList.remove('block');
                    bar2.classList.add('hidden')

                     bar3.classList.remove('block');
                     bar3.classList.add('hidden')

                     bar4.classList.remove('block');
                     bar4.classList.add('hidden')

                     bar5.classList.remove('block');
                     bar5.classList.add('hidden')

                     bar6.classList.remove('block');
                     bar6.classList.add('hidden')

                     bar7.classList.remove('block');
                     bar7.classList.add('hidden')



                }else{
                    bar.classList.remove('w-[6%]');
                    bar.classList.add('w-[16%]')

                   theBody.classList.remove('w-[94%]');
                    theBody.classList.add('w-[84%]')


                     thePicture.classList.remove('h-16');
                     thePicture.classList.add('h-36')

                     thePicture.classList.remove('w-16');
                     thePicture.classList.add('w-36')

                    thePicture.classList.remove('mx-2');
                     thePicture.classList.add('mx-6')


                     thePicture2.classList.remove('w-16');
                     thePicture2.classList.add('w-52')

                     thePicture2.classList.remove('h-8');
                     thePicture2.classList.add('h-16')



                    bar2.classList.remove('hidden');
                    bar2.classList.add('block')

                    bar3.classList.remove('hidden');
                    bar3.classList.add('block')

                    bar4.classList.remove('hidden');
                    bar4.classList.add('block')

                    bar5.classList.remove('hidden');
                    bar5.classList.add('block')

                    bar6.classList.remove('hidden');
                    bar6.classList.add('block')

                    bar7.classList.remove('hidden');
                    bar7.classList.add('block')
                }

                  }


         function loadPage(page) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', page, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById('content').innerHTML = xhr.responseText;
                } else {
                    document.getElementById('content').innerHTML = 'Error loading page';
                }
            };
            xhr.send();
        }


          function openPopup() {
            document.getElementById('myModal').classList.remove('hidden');
        }

        function closePopup() {
            document.getElementById('myModal').classList.add('hidden');
        }

        document.getElementById('closeModal').addEventListener('click', closePopup);

        window.onclick = function(event) {
            if (event.target === document.getElementById('myModal')) {
                closePopup();
            }
        }



          function openPopup2() {
            document.getElementById('myModal2').classList.remove('hidden');
        }

        function closePopup2() {
            document.getElementById('myModal2').classList.add('hidden');
        }

        document.getElementById('closeModal').addEventListener('click', closePopup2);

        window.onclick = function(event) {
            if (event.target === document.getElementById('myModal2')) {
                closePopup2();
            }
        }




         function loadHomePage() {
        const content = `
            <div class='relative w-[100%] h-[100%] '>
                <div class="relative h-[100%] w-full ">
                    <div class="relative w-[99%] mx-auto  h-[50%]  flex justify-between p-2 gap-2  ">
                        <div class="relative bg-white h-[100%] w-[33%] border border-gray-400 rounded-xl cursor-pointer transform hover:scale-x-105 hover:scale-y-105 decoration-sky-500 hover:shadow-2xl transition duration-300"
                        onclick="loadPage('../../../component/Releve.php')"
                        >
                            <div class="relative h-[100%] w-[100%] flex items-center justify-center ">
                                <img src="../../../public/images/maxresdefault (3).jpg" alt="logo"
                                     class="relative h-[100%] w-[100%] rounded-xl cursor-pointer"/>
                                <div class="absolute bottom-2 h-[63%] w-[100%] items-center justify-center">
                                    <div class="relative h-[50%] top-0 w-[100%] flex items-center">
                                        <span class="text-[40px] mx-auto font-black font-[Gotham] text-indigo-900">Relevé de notes</span>
                                    </div>
                                    <div class="absolute bottom-12 h-auto w-[100%] items-center justify-center text-center">
                                        <span class="text-sm text-justify">Accedez aux Relevé de notes des eleves</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative bg-white h-[100%] w-[33%] border border-gray-400 rounded-xl cursor-pointer transform hover:scale-x-105 hover:scale-y-105 decoration-sky-500 hover:shadow-2xl transition duration-300"
                             onclick="loadPage('../../../component/TimeList.php')">
                            <div class="relative h-[100%] w-[100%] flex items-center justify-center ">
                                <img src="../../../public/images/maxresdefault (3).jpg" alt="logo"
                                     class="relative h-[100%] w-[100%] rounded-xl cursor-pointer"/>
                                <div class="absolute bottom-2 h-[63%] w-[100%] items-center justify-center">
                                    <div class="relative h-[50%] top-0 w-[100%] flex items-center">
                                        <span class="text-[40px] mx-auto font-black font-[Gotham] text-indigo-900">Emploi du Temps</span>
                                    </div>
                                    <div class="absolute bottom-12 h-auto w-[100%] items-center justify-center text-center">
                                        <span class="text-sm text-justify">Accedez aux emploi du temps des differentes classes</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative bg-white h-[100%] w-[33%] border border-gray-400 rounded-xl cursor-pointer transform hover:scale-x-105 hover:scale-y-105 decoration-sky-500 hover:shadow-2xl transition duration-300"
                             onclick="loadPage('../../../component/Compteur.php')">
                            <div class="relative h-[100%] w-[100%] flex items-center justify-center ">
                                <img src="../../../public/images/maxresdefault (3).jpg" alt="logo"
                                     class="relative h-[100%] w-[100%] rounded-xl cursor-pointer"/>
                                <div class="absolute bottom-2 h-[63%] w-[100%] items-center justify-center">
                                    <div class="relative h-[50%] top-0 w-[100%] flex items-center">
                                        <span class="text-[40px] mx-auto font-black font-[Gotham] text-indigo-900">Compteur</span>
                                    </div>
                                    <div class="absolute bottom-12 h-auto w-[100%] items-center justify-center text-center">
                                        <span class="text-sm text-justify">Accedez a vos fichiers personnels</span>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>`;

        document.getElementById('content').innerHTML = content;
    }


    </script>

</head>

<body onload="loadHomePage()">

        <div class="relative flex flex justify-between bg-white  w-[100%] h-screen">

            <div id="bar" class="relative w-[16%]  h-[100%]  "  >

                <div  class="relative h-[100%] w-[100%] bg-gradient-to-t from-sky-800 via-black/35 to-sky-800   ">

                    <div class="relative h-[28%] ">
                        <div id="picture" class="relative h-36 w-36 mx-6 top-4 rounded-full border border-white flex items-center cursor-pointer"
                             onclick="toggleWidth()"
                        >
                            <img id="picture2" src="../../../public/images/logo.png" class="h-16 w-52" alt="kelasi_s.jpg" >
                        </div>
                    </div>

                    <div class="relative h-[60%] top-6   ">

                        <!--              onglet acceuil  -->

                        <div class="relative w-full top-6 h-[13%] flex justify-between text-white text-center hover:bg-white/25 cursor-pointer decoration-sky-500 hover:shadow-2xl transition duration-300"
                             onclick="loadHomePage()">
                            <div class="relative  w-[90%] mx-2.5 space-x-9 flex items-center justify-center">
                                <img src="../../../public/icons/home_127px.png" alt="nfdc"
                                     class="absolute left-3  cursor-pointer"
                                     width="30px"
                                     height="30px"
                                />
                                <span id="elements1" class="block font-extralight  relative text-left  w-[60%] text-[16px] font-[Trebuchet] shadow-blue-300   transform duration-200">Acceuil</span>
                            </div>

                        </div>


                        <!--              onglet releve de notes  -->

                        <div class="relative w-full top-6 h-[13%] flex justify-between text-white text-center hover:bg-white/25 cursor-pointer decoration-sky-500 hover:shadow-2xl transition duration-300"
                             onclick="loadPage('../../../component/Releve.php')"
                        >
                            <div class="relative  w-[90%] mx-2.5 space-x-9 flex items-center justify-center">
                                <img src="../../../public/icons/list_127px.png" alt="nfdc"
                                     class="absolute left-3  cursor-pointer"
                                     width="30px"
                                     height="30px"
                                />
                                <span id="elements2" class="block font-extralight relative text-left  w-[60%] text-[16px] font-[Trebuchet] shadow-blue-300   transform duration-200">Réleves de Note</span>
                            </div>

                        </div>

                        <!--              onglet emploi du temps  -->

                        <div class="relative w-full top-6 h-[13%] flex justify-between text-white text-center hover:bg-white/25 cursor-pointer decoration-sky-500 hover:shadow-2xl transition duration-300"
                             onclick="loadPage('../../../component/TimeList.php')">
                            <div class="relative  w-[90%] mx-2.5 space-x-9 flex items-center justify-center">
                                <img src="../../../public/icons/planner_127px.png" alt="nfdc"
                                     class="absolute left-3  cursor-pointer"
                                     width="30px"
                                     height="30px"
                                />
                                <span id="elements3" class="block font-extralight relative text-left  w-[65%] text-[16px] font-[Trebuchet] shadow-blue-300   transform duration-200">Emploi du temps</span>
                            </div>

                        </div>


                        <!--              onglet information  -->

                        <div class="relative w-full top-6 h-[13%] flex justify-between text-white text-center hover:bg-white/25 cursor-pointer decoration-sky-500 hover:shadow-2xl transition duration-300"
                             onclick="loadPage('../../../component/Informations.php')">
                            <div class="relative  w-[90%] mx-2.5 space-x-9 flex items-center justify-center">
                                <img src="../../../public/icons/info_127px.png" alt="nfdc"
                                     class="absolute left-3  cursor-pointer"
                                     width="30px"
                                     height="30px"
                                />
                                <span id="elements4" class="block font-extralight relative text-left  w-[65%] text-[16px] font-[Trebuchet] shadow-blue-300   transform duration-200">Informations</span>
                            </div>

                        </div>

                        <!--              onglet deconnexion  -->
                        <a
                                class="relative w-full top-6 h-[13%] flex justify-between text-white text-center hover:bg-white/25 cursor-pointer decoration-sky-500 hover:shadow-2xl transition duration-300"
                                onclick="openPopup()"
                            >

                            <div class="relative  w-[90%] mx-2.5 space-x-9 flex items-center justify-center">
                                <img src="../../../public/icons/shutdown_127px.png" alt="nfdc"
                                     class="absolute left-3  cursor-pointer"
                                     width="30px"
                                     height="30px"
                                />
                                <span id="elements5" class="block font-extralight relative text-left  w-[60%] text-[16px] font-[Trebuchet] shadow-blue-300   transform duration-200">Déconnexion</span>
                            </div>

                        </a>

                        <!--              onglet Info school  -->

                        <div id="elements6" class="block cursor-default absolute w-full bottom-0 h-[13%] flex justify-between text-white text-center  "
                             onclick="loadPage('../../../component/TimeList.php')">
                            <div class="relative  w-[90%] mx-2.5 space-y-1 flex flex-col items-center ">
                                <span  class="block font-extralight relative text-center  w-[100%] text-[16px] font-[Trebuchet] shadow-blue-300   transform duration-200">Groupe Scolaire Kelassi</span>
                                <span  class="block font-extralight relative text-center  w-[100%] text-[11px] font-[Trebuchet] shadow-blue-300   transform duration-200">Téléphone : 00-000-00-00</span>
                                <span  class="block font-extralight relative text-center  w-[100%] text-[12px] font-[Trebuchet] shadow-blue-300   transform duration-200">Email :<span class="underline text-black font-bold"> groupescolairekelassi@gmail.com</span></span>

                            </div>

                        </div>

                    </div>

                </div>
            </div>







            <div id="body" class="relative  text-center w-[84%] border border-black h-[100%] font-bold">
                  <div class="relative border border-t-0 border-l-0 border-r-0  border-black/20 bg-gray-50 w-[100%] h-[10%] flex justify-between">

                      <div class="relative w-[30%] "></div>

                      <div class="relative w-[40%]  ">



                            <div class="relative w-[100%]  space-y-1 flex flex-col   text-right mr-6 font-black font-[Gotham] text-indigo-900"

                            >
                                <span class="uppercase cursor-pointer mt-2 hover:underline"
                                      onclick="openPopup2()"> Noms et Prenoms</span>
                                <span class="text-gray-500 cursor-default">
                                <?php
                                setlocale(LC_TIME,'fr');
                                $day = ucfirst(strftime('%A, Le  %d'));
                                $day .= ucfirst(strftime(' %B %Y'));
                                echo $day ;
                                ?></span>
                            </div>

                      </div>

                  </div>
                    <div  id="content" class="relative h-[80%] w-[100%]">

                    </div>


                <div id="myModal" class="fixed inset-0 hidden bg-black/50 flex justify-center items-center z-50">
                    <div class="relative bg-white w-[30%] h-[35%] p-5 rounded-lg shadow-lg relative">
<!--                        <span id="closeModal" class="absolute top-2 right-2 cursor-pointer text-gray-500 text-xl">&times;</span>-->
<!--                        -->
                        <div
                                class="flex flex-col items-center justify-center  space-y-20 border border-gray-500 rounded-lg relative h-[100%] w-[100%]">
                            <div
                                    class="flex flex-col items-center justify-center  top-7 relative h-[50%] w-[100%]">
                              <span
                                      class="text-3xl text-center font-black font-[Gotham] text-blue-900">Voulez vous vraiment vous déconnecter ? </span>

                            </div>

                            <div
                                    class="flex justify-between bottom-3 space-x-6 relative w-[80%] h-96 ">
                                <a
                                        class="bg-indigo-600 text-white flex justify-center items-center text-center rounded w-28 h-10 font-bold text-sm cursor-pointer transform hover:scale-x-110 hover:scale-y-110 hover:bg-indigo-800 transition duration-300  "
                               href="../../../src/index.php"
                                >OUI
                                </a>

                                <button
                                        class="bg-black text-white rounded w-28 h-10 font-bold text-sm cursor-pointer transform hover:scale-x-110 hover:scale-y-110 transition duration-300  "
                                        onclick="closePopup()"
                                >NON


                                </button>

                            </div>

                    </div>
                </div>


            </div>


                <div id="myModal2" class="fixed inset-0 hidden bg-black/50 flex justify-center items-center z-50">

                    <div class="relative bg-white w-[32%] h-[98%] p-5 rounded-lg shadow-lg relative">
                        <span id="closeModal" class="absolute -top-2 -right-0.5  cursor-pointer text-gray-500 text-4xl"
                              onclick="closePopup2()"
                        >&times;</span>


                        <div
                                class="flex flex-col items-center justify-center  space-y-2
                                 border border-gray-500 rounded-lg relative h-[100%] w-[100%]">

                            <span class="relative h-[10%] w-full flex items-center justify-center  text-[28px] mx-auto font-black font-[Gotham] text-indigo-900">Nom et prenom</span>
                            <div class="relative h-[20%] flex flex-col items-center justify-center">
                                <div id="picture" class="relative h-28 w-28 border border-black  rounded-full  flex items-center "
                                >
                                    <img id="picture2" src="../../../public/images/logo.png" class="h-16 w-52" alt="kelasi_s.jpg" >
                                </div>
                            </div>

                            <div class="relative h-[70%] w-[85%]  mx-auto space-y-1  ">
                                <div
                                        class="relative flex justify-between items-center justify-center w-full mt-3  border rounded-lg border-gray-500   ">
                                    <input
                                            name="nom"
                                            class="text-large relative w-full mx-auto text-black  text-center text-[18px]  bg-transparent  font-light font-[Inter]  rounded-lg py-6 px-12 h-10 placeholder-black focus:outline-none focus:border border-blue-500"
                                            placeholder="Matière Dispenser :"
                                            type='text'
                                    >
                                    <img
                                            class=" mx-4 h-6 w-6  absolute"
                                            src="../../../public/icons/book.png"
                                            height={30}
                                            width={30}
                                            alt="Nfc"
                                    >

                                </div>
                                <div
                                        class="relative flex justify-between items-center justify-center w-full   border rounded-lg border-gray-500   ">
                                    <input
                                            name="nom"
                                            class="text-large relative w-full mx-auto text-black  text-center text-[18px]  bg-transparent   rounded-lg py-6 px-12 h-10 placeholder-black font-light font-[Inter] focus:outline-none focus:border-2 border-blue-500"
                                            placeholder="Cycle :"
                                            type='text'
                                    >
                                    <img
                                            class=" mx-4 h-6 w-6  absolute"
                                            src="../../../public/icons/datee.png"
                                            height={30}
                                            width={30}
                                            alt="Nfc"

                                    >

                                </div>
                                <div
                                        class="relative flex justify-between items-center justify-center w-full  border rounded-lg border-gray-500   ">
                                    <input
                                            name="nom"
                                            class="text-large relative w-full mx-auto text-black text-center text-[18px]  bg-transparent placeholder-black font-light font-[Inter]  rounded-lg py-6 px-12 h-10  focus:outline-none focus:border-2 border-blue-500"
                                            placeholder="Classe :"
                                            type='text'
                                    >
                                    <img
                                            class=" mx-4 h-6 w-6  absolute"
                                            src="../../../public/icons/students.png"
                                            height={40}
                                            width={40}
                                            alt="Nfc"

                                    >

                                </div>
                                <div
                                        class="relative flex justify-between items-center justify-center w-full   border rounded-lg border-gray-500   ">
                                    <input
                                            name="nom"
                                            class="text-large relative w-full mx-auto text-black text-center text-[18px]  bg-transparent  rounded-lg py-6 px-12 h-10 placeholder-black font-light font-[Inter] focus:outline-none focus:border-2 border-blue-500"
                                            placeholder="Téléphone :"
                                            type='number'
                                    >
                                    <img
                                            class=" mx-4 h-6 w-6  absolute"
                                            src="../../../public/icons/phone.png"
                                            height={30}
                                            width={30}
                                            alt="Nfc"

                                    >

                                </div>
                                <div
                                        class="relative flex justify-between items-center  justify-center w-full  border rounded-lg border-gray-500   ">
                                    <input
                                            name="nom"
                                            class="text-large relative w-full mx-auto text-black text-center text-[18px]  bg-transparent   rounded-lg py-6 px-12 h-10 placeholder-black font-light font-[Inter] focus:outline-none focus:border-2 border-blue-500"
                                            placeholder="Mail : "
                                            type='text'
                                    >
                                    <img
                                            class=" mx-4 h-6 w-6  absolute"
                                            src="../../../public/icons/mail.png"
                                            height={30}
                                            width={30}
                                            alt="Nfc"

                                    >

                                </div>

                                <div
                                        class="relative flex justify-between items-center  justify-center w-full  border rounded-lg border-gray-500   ">
                                    <input
                                            name="nom"
                                            class="text-large relative w-full mx-auto text-black text-center text-[18px]  bg-transparent   rounded-lg py-6 px-12 h-10 placeholder-black font-light font-[Inter] focus:outline-none focus:border-2 border-blue-500"
                                            placeholder="Modifier mot de passe : "
                                            type='text'
                                    >
                                    <img
                                            class=" mx-4 h-6 w-6  absolute"
                                            src="../../../public/icons/password.png"
                                            height={30}
                                            width={30}
                                            alt="Nfc"

                                    >

                                </div>

                                <div
                                        class="relative flex justify-between items-center  justify-center w-full   border rounded-lg border-gray-500   ">
                                    <input
                                            name="nom"
                                            class="text-large relative w-full mx-auto text-black text-center text-[18px]  bg-transparent   rounded-lg py-6 px-12 h-10 placeholder-black font-light font-[Inter] focus:outline-none focus:border-2 border-blue-500"
                                            placeholder="Salaire : "
                                            type='text'
                                    >
                                    <img
                                            class=" mx-4 h-6 w-6  absolute"
                                            src="../../../public/icons/cash.png"
                                            height={40}
                                            width={40}
                                            alt="Nfc"

                                    >

                                </div>







                            </div>


                        </div>
                    </div>


                </div>



            </div>

</body>


</html>