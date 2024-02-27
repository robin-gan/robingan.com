var globalXAM, globalSelectPage;
var version = Date.now();
function loadProject() {
    fetch('/data/projectData.xml?stopcaching' + version).then((res) => {
        res.text().then((xml) => {
            let parser = new DOMParser();
            globalXAM = parser.parseFromString(xml, 'text/xml');

            var eleList = globalXAM.getElementsByTagName('table');
            var output = '';
            for (let i = 0; i < eleList.length; i++) {
                var title = eleList[i].querySelector('[name="title"]').firstChild.nodeValue;
                var img = eleList[i].querySelector('[name="img"]').firstChild.nodeValue;
                var des = eleList[i].querySelector('[name="des"]').firstChild.nodeValue;
                var date = eleList[i].getElementsByTagName('date')[0].firstChild.nodeValue;
                var lang = eleList[i].querySelector('[name="li1"]').firstChild.wholeText;

                var id;
                var listsp = title.split(' ');
                for (let i = 0; i < listsp.length; i++) {
                    listsp[i] = listsp[i].trim();
                }

                if(title.includes('.')){
                    id = listsp.join('')
                }else if(listsp.length > 1){
                    id = listsp.join('_');
                }else{
                    id = title;
                }

                output += `
                    <div class="card-container">
                        <div class="card" project="`+ id +`">
                            <div class="firstinfo">
                            <div class="profileinfo">
                                <h2>`+title+`<img src="../images/projects/avatar/`+img+`"/></h2>
                                <p class="bio">`+des+`</p>
                            </div>
                            </div>
                        </div>
                    </div>
            `;
            }
            document.getElementById('content').innerHTML = output;
        });
    });
}

function resetTitleAndDescription(){
    document.title = 'Projects | Robin Gan';
    document.querySelector('[name="description"]').content = " " + headerOG;
    document.getElementById('projectDesPage').innerHTML = `
        <a onclick="closeDes()" id="close_cross_new" class="close-btn">
            <span><</span>
        </a>
        <h2 id="projectDesPage-title" class="">Data Loading</h2>
        <div id="projectDesPage-content" style="margin-top: 10px;">
            <h3>Loading</h3>
            <div class="loading">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>`;
}

const formatView = n => { 
    if (n < 1e3) return n; 
    if (n >= 1e3 && n < 1e6) return +(n / 1e3).toFixed(1) + "K"; 
    if (n >= 1e6 && n < 1e9) return +(n / 1e6).toFixed(1) + "M"; 
    if (n >= 1e9 && n < 1e12) return +(n / 1e9).toFixed(1) + "B"; 
    if (n >= 1e12) return +(n / 1e12).toFixed(1) + "T"; 
}; 

function loadProjectDes(id, scroll=true){
    try{
        fetch('/data/projects/' + id + '.xml?version' + version).then((res) => {
            res.text().then((xml) => {
                let parser = new DOMParser();
                let xmlRes = parser.parseFromString(xml, 'text/xml');

                let table_ = xmlRes.getElementsByTagName('table')[0];
                let title_ = table_.querySelector('[name="title"]').firstChild.nodeValue;
                let content_ = table_.getElementsByTagName('content')[0].firstChild.wholeText;
                let link_ = table_.getElementsByTagName('link')[0].firstChild.wholeText;
                let date_ = table_.getElementsByTagName('date')[0].firstChild.nodeValue;

                addOneView(id, "project").then((currentView)=>{
                    let output = `
                    <a onclick="closeDes()" id="close_cross_new" class="close-btn">
                        <span><</span>
                    </a>

                    <!--<h2 id="projectDesPage-title" date="By Robin Gan &nbsp;&bull; &nbsp;`+ date_ + `&nbsp; &bull; &nbsp;` + formatView(currentView) + ` views">` + title_ + `</h2>-->
                    <h2 id="projectDesPage-title" date="`+date_+`">` + title_ + `</h2>
                    <ul id="projectDesPage-menu" >
                        `+ link_ + `
                    </ul>
                    <div id="projectDesPage-content">
                        `+ content_ + thanksForReadingBlock + `
                    </div>
                    `;

                  
                    (new Promise((res, rej)=> {
                        document.title = title_ + ' Projects | Robin Gan';
                        document.querySelector('[name="description"]').content = title_ + " -  " + headerOG;
                        document.getElementById('projectDesPage').innerHTML = output;
                        res();
                    })).then(()=> {
                        setScroll(scroll);
                        links();
                    });
                });
            });
        });
        
    }catch{
        resetTitleAndDescription();
        console.log("error in loadProjectDes()");
    }
}

function getCardClassName(element, num){
    if (num == 3 && !element.classList.contains('card')){
        globalSelectPage = "none";
        return;
    } else if (element.classList.contains('card')){
        globalSelectPage = element.attributes.project.nodeValue;
        return;
    }
    getCardClassName(element.parentElement, num + 1);
}

function closeDes(){
    document.getElementById('content').classList.remove('contentDisappear');
    document.getElementById('projectDesPage').classList.add('projectPageAppear');
    resetTitleAndDescription();
    history.pushState({}, globalSelectPage, `#${''}`);
}

//app to load project des
const app = {
    pages: [],
    show: new Event('show'),
    init: function () {
        var promise = new Promise((resolve, reject) => {
            //get rid of the / in project page
            //let newLocation = window.location.pathname.split("/");
            //newLocation.pop();
            //window.location = window.location.hostname + newLocation.join("/") + location.hash;
            //location.replace(location.href, window.location.hostname + newLocation.join("/") + location.hash);
            //console.log(location);
            loadProject();
            resolve();
        });

        promise.then((val) => {
            var inter = setInterval(() => {
                app.pages = document.querySelectorAll('.card');
                if (app.pages.length != 1) {
                    
                    document.querySelectorAll('.card').forEach((link) => {
                        link.addEventListener('click', app.nav);
                    })

                    let hash = location.hash;
                    if (hash.length != 0) {
                        let newhash = location.hash.replace('#', '');
                        if (globalXAM.querySelector('[id="' + newhash + '"]') == undefined){
                            closeDes();
                        }else{
                            document.getElementById('content').classList.add('contentDisappear');
                            document.getElementById('projectDesPage').classList.remove('projectPageAppear');

                            document.title = newhash + 'Projects | Robin Gan';
                            document.querySelector('[name="description"]').content = newhash + " -  " + headerOG;
                            loadProjectDes(newhash);
                        }
                    }
                    clearInterval(inter);
                }
            }, 300);

            inter;
        });
        window.addEventListener('popstate', app.pop);
    },
    nav: function (ev) {
        ev.preventDefault();
        getCardClassName(ev.target, 0);
        
        try {
           if(globalSelectPage != "none"){
               let timeOut = 200;
               if(!isMobile()){
                   timeOut = 0;
               }
               setTimeout(() => {
                   document.getElementById('content').classList.add('contentDisappear');
                   document.getElementById('projectDesPage').classList.remove('projectPageAppear');
                   loadProjectDes(globalSelectPage, false);
                   history.pushState({}, globalSelectPage, `#${globalSelectPage}`);
               }, timeOut);
           }
        } catch{
            closeDes();
        }
    },
    pop: function(ev){
        let newhash = location.hash.replace('#', '');

        if (globalXAM.querySelector('[id="' + newhash + '"]') == undefined || newhash == ""){
            closeDes();
        }else{
            let despage = document.getElementById('projectDesPage');
            globalSelectPage = newhash;
            loadProjectDes(globalSelectPage);
            document.getElementById('content').classList.add('contentDisappear');
            document.getElementById('projectDesPage').classList.remove('projectPageAppear');
            despage.dispatchEvent(app.show);
        }               
    }
}

//just add this
function project_nav(id){
    document.getElementById('content').classList.add('contentDisappear');
    document.getElementById('projectDesPage').classList.remove('projectPageAppear');
    loadProjectDes(id);
    history.pushState({}, id, `#${id}`);
}
document.addEventListener('DOMContentLoaded', app.init);
document.getElementById('projectDesPage').addEventListener('scroll', onScroll);
links();