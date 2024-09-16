
    function toggleWidth(){

        const bar = document.getElementById('bar');
        const thePicture = document.getElementById('picture');
         const thePicture2 = document.getElementById('picture2');
        const bar2 = document.getElementById('elements1');
        const bar3 = document.getElementById('elements2');
        const bar4 = document.getElementById('elements3');
        const bar5 = document.getElementById('elements4');
        const bar6 = document.getElementById('elements5');
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
                 thePicture2.classList.add('w-12')





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


                 thePicture2.classList.remove('w-12');
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