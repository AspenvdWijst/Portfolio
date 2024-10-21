// all of this code was made by following this tutorial: https://www.youtube.com/watch?v=R846J8LJ6os

function sleep(ms){
    return new Promise((resolve)=> setTimeout(resolve, ms));
}

const words = ['software development', 'games', 'music', 'art']
const element = document.getElementById('typewriter')

let sleeptime = 80;
let currentword = 0;

const writeloop = async () => {
    while (true){
        let curword = words[currentword];

        for(let i = 0; i < curword.length; i++){
            element.innerText = curword.substring(0, i + 1);
            await sleep(sleeptime);
        }

        await sleep(sleeptime * 10);

        for(let i = curword.length; i > 0; i--){
            element.innerText = curword.substring(0, i - 1);
            await sleep(sleeptime);
        }

        await sleep(sleeptime * 10);

        if (currentword === words.length - 1) {
            currentword = 0;
        } else {
            currentword++;
        }
    }
};

writeloop();
