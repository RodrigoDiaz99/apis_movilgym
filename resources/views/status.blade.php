<style>
    @import url('https://fonts.googleapis.com/css?family=Lato|Roboto+Slab');

    * {
        position: relative;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .centered {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    h1 {
        margin-bottom: 50px;
        font-family: 'Lato', sans-serif;
        font-size: 50px;
    }

    .message {
        display: inline-block;
        line-height: 1.2;
        transition: line-height .2s, width .2s;
        overflow: hidden;
    }

    .message,
    .hidden {
        font-family: 'Roboto Slab', serif;
        font-size: 18px;
    }

    .hidden {
        color: #FFF;
    }
</style>

<section class="centered">

    <h1>{{$estatus}}</h1>
    <h2>{{$message}}</h2>

    </div>
</section>
