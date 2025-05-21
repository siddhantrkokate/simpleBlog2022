<div id="main-content">
            <div id="display-content">
                <img src="https://i.ibb.co/BynzxSw/what-are-the-subjects-in-bca.gif" id="main-thumbnail" alt=""><br><br>
                <p id="author">By <span id="dark">Sidhhant Kokate</span></p><br>
                <div><h1>What are the subjects in bca?</h1></div><br><br>
                <p id="para">Bachelor of Computer Applications is a three-year professional degree course. <br><br> Subjects in BCA include courses on programming, software engineering, data structures and algorithms, operating systems, and computer networks.</p>
                <br><button id="read" onclick="readMore()">Read More</button>
            </div>
            <div id="display-none-content">
                <h2>Subjects in BCA 1st Semester</h2>
                <table class="table">
                    <tr class="tr">
                        <td class="td">Fundamentals of IT & Computers</td>
                    </tr>
                    <tr class="tr">
                        <td class="td">Digital Electronics</td>
                    </tr>
                    <tr class="tr">
                        <td class="td">Basic Mathematics</td>
                    </tr>
                </table>
            </div>

        </div>

<script>
    // readMore()
    function readMore(){
        let a = document.getElementById("display-none-content").style.display = "inline";
        let b = document.getElementById("read").style.display = "none";
    }
</script>
<style>
            /* credits - author */
            #author{
            font-size: 13px;
            color: #666666;
            font-family: 'Nunito', sans-serif;
        }
        #dark{
            font-weight: bold;
            font-family: 'Nunito', sans-serif;
        }
        /* heading of the blog */
        h1{
            font-size: 29px;
            color: #2f2f2f;
            word-spacing: 2px;
            font-family: 'Nunito', sans-serif;
        }
        /* paragraph of the page */
        #para{
            color: #747474;
            font-size: medium;
            word-spacing: 2px;
            font-family: 'Nunito', sans-serif;
        }
        #read{
            background-color: #1E90FF;
            color: #fff;
            width: 100%;
            padding: 15px 10px;
            border: 0px solid red;
            border-radius: 5px;
            font-size: 15px;
        }
        #display-content{
            display: inline;
        }
        #display-none-content{
            display: none;
        }
        #read{
            display: inline;
        }
        h2{
            padding-top: 20px;
            font-size: 24px;
        }
        h3{
            padding-top: 16px;
            font-size: 20px;
        }
        .table .tr .td{
            border: 1px solid #d3d3d3;
        }
        .td{
            padding: 15px 15px;
        }
        .table{
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }
</style>