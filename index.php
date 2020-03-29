<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>My Fitness</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">
  <link href="assets/css/spapp.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <!-- <div class="contact-image"> -->
        <!-- <img width="40px" height="40px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABMlBMVEUmOnr///8SEUn/yRvqoi/Q0dP/f0/TWTMAAELo6erV19d5eo8XMHWJkbAAAEr1tibSVDP+elHhnDDmmDHyqC1OOkQhN3tKT3D/zREkN3YECkkQDEUAIW8AHW4ANXwABUrdc1fwuyjEVDfbbk2CgpjqbULFVz8AJnEAK331wiQTLXQAAED/zTYAADbppTwAADxDU4nAxNQzRYHg4upyfKKzuMtcaJZLWo2Xnrmus8hlcJoNMH0VGFBnMUTO0d4aI12QmLUqPXeyk0tnTHD/hEqtSzs1HUiurrxvb4krLFl7hKc7R3SVgFeFaTvfszHRpSZZMEqAU2y6Z2C2XE2oW2alTk5WQGoAH3mAjrb0uTlXWHqSkqOuTDrfXCqYPz52NkLPkTKRZztDMkW2gDUiHUdkZYK4+0GoAAALVUlEQVR4nN3d7WObxh0HcFBTT8ygtalLLIGiZk2LjUqFhB6djMpdGttqt6XNlq3O2vXx//8XBnpE4rj73QPSnb7vnBc6PrnjnoQ4TS8/RtydjK3ZcBSGvWvtuheGo+HMGk+6sbGH0rUyP9yIJ9ao57ue75umadvaKrad/O37nuv3RtakXGhZQqM7HaY0c8NCxzZT6HDaLYtZhtAYzHqeR7RtOz2vNxuUoRQujK2wSa65gtpshlYs+oLECrt9n67uEHXp97tCr0mgcM7j0K0iGClKGFmmx1N527E9cxoJujIxwsHIFVF72ZjuaCDk2gQIjbEvsPo2sT1/LKBz5RZGfc8vgbeI7/W5GyunMLpqim6e2zGbV5xGLmF0Jfz2QxhdPiOH0LhqlnH75WM3rzjuR3ahtYf6W8V0rb0LJ2Z5/QsqvjnZqzAKvb360ngh2+3IJLTc/dyA27HZmiqDMLb320A38W2GlQe9cOYeyKel1TgrXRj3DlWBi/g92mqkFI7d+kGBmlZ3xyUKjdH+u9B8vBHV+E8jjM39jfG4mCZNS6UQjpuHpq3TpGipcOFQhha6inclXGiEcrTQVcwQejMChRHXDloZsU3gJA4m7B58kMin7sL6G5BwIk8fk00TtNyACCUFAokAoUSjxG4gowZZOD7gTJsYwBSOKJQaCCGShJIDAUSCUNpOZhOX0N3ghQP5gUl3g/9+AyuMVQAmROzQjxNGMs21cfFwEzic0JZtLloU22YTSraawMUMWYRX6gATYvF6sVA4VuUmXMQrHBaLhIp0o5sUdqgFQuOwu6IsMQsW/QXCUJVudBO7oLdBC6fqVWFyK07hwlj26TY66G0NpFBTr42mqaMxiH/rqzQSZmP2YcKumm00jYt4Hg4hVLUG0yAmqHmhpWI/uoqf/yI8J4zUbaNp3NxCKifsqdmPrmL3SMKJWhPufLzdbZtdocrdzCImXqh0N7OIP8UJDbW7mUVcAyNUdjaTzc7MZksYqbbsRacZFQqV2popzvamTVao+GC/ydawnxUeSRXuVGJGeCR3YZrsnZgRHkVHuki2O90IDdXna9l4BkI4Vn86s4k/RgiPqQoTYl44OC6hN8gJR2qvC3djj3aFRzPar7Ie9VdC63iGikVMa0d4bMDNSngp7B5XP5PG624J6eYz9lbKukTOolbzmqWQYrS3n1082srFM9rL5iiKAulnhRSN1L7+8vJ8K5dfXpdTj5xFLZupRtlI7a8vz9/Zyfnl16X80pmzqGUz1SgbqX25W2ha7pMLJgM+z/LAtCj4tfobYQxupOY3iFKTcv8mftrOX5QXr4Xw4f7i76hS3zn/R034o+78RS0G/bkwBF/eM1QjTXJZq4gmXhQU9QRcVD1cCQ349gVGKJqIEUKLahpL4QB+E+GEgok4IbAof7AUUkxosEKxRKwQVtR8vEiFPXixeKFQIl4IKmr+ZaIG3IJaTgsJQpFEjNBpJIGM/OmGlAaZstnam7+muX5MEgokFgtrL1+leUN+7CeduGmA0fDxtycvFvmuqNi1UByxWPj65MVJkhcn3z4mfIY5nQuJOzRv5h84/9B/PiEJhRELhf/aXM4bwmekuzUaeRvx8Xcn67xPFooiFgrf31zOa9I456VC4h7U44/ohIKIEOHHLUJZbpQIiR0NtVAMESSsOfiyksm3Rt7NpxcKIcKEFTzRHydC4oyGQSiCCBTiicmsRiM/8MwiFECECrFl2WEiJBbFJOQnwoXYshIhcUbDJuQmUggxZXm6Rv7CAiSs7qZdNfnybwphMdGNNPIeDUg4e5qPxZX/0AgLiV6skZe/EOFnuvh8RiOsFFy8P9AmRyJ8XiCcaFPiAl8NYQHRnGrknURFhGiiaWl94jJSFSGSaPe14fEIUUR7qJGfUFBH6OSJ9kgLSUCFhChieFzCivNFXkjeLFVJmCdCNoO3hcivvPYoPMcLc8RriPDjTzY5+xMy3xvi8z26qLPM1XyaFyIaKln46R/Wee+DB8h8/q74fI4u6oP3Npfz51ZeuEO8htyHigm3ib1jFG4RQaOFcsIs8UiFG2IypwHMSxUUrvcYk3kpYG2honBFTNYWgPWhksIlMVkfAtb4agoXxGSND9inUVQ4J/oTyF4bRPhH8eEWpkR/ANkvBQgf3p4Kz0NuYaVS92LInjdEmNvz5o8IYcWNIN9bQISIST5nakKEHQPy3ZPCQqeqa+RHMVQWNu5A3wErLKzeg77HV1jYfgt6FkNhYecG9DyNwsIgfZ5GJwpfZ4QFxe5R+DAj/C9RCHyu7Yf1R/4ogfDH9dX88KqB/4ykKwU+m7j6yK9q6FL3KXxQ+2p1Of8jdqW30OdL66/+kuZlSwph6+X8al5VCDU472igzwib6VO5DacihXDxjHCD6Jt3NODnvOvOolgphNA4jk7xrP6CqJYwmdHQ/N5iTlRL2L7RqX4zkxLVEqa3IdXvnuqy9DTAzG9Dut+u1Z3aT+hSfypByF1UOhrS/v6wXvv5DFXq2c8lCLmL6gzWQvhvSOsNdNtpOcKFTgtZ0sMGuKiOsRHCf9tlfvgg91979uAX4n4JQ1q/8BU1HysYfstt/vbr2U5+/a0MYELkKyqdsulMv8evVT7cSqUmvoku0uAqKjCyQpp3KtSX08JVyvKl4Shq2UiZ3otRLw0kMstGyvZuEyWIHX1bSPd+GgWIi+E+I6R8x5D8xCDeEdK+J0p2YrpDsyOkfdeX5MRVP5N9Xxvtmy3kJgZ6Xkj9zj2ZidVThJD+vYkSE4MIIWR496W0xOrvOkrI8P5SWYlBjBSyvINWTmL1kY4WMr1Z8PmhOYhkq1DAu6DlI25VoYj3eUtHDN4tFDK+DVoy4mphiBQyvldfLmIQYYSsR1nJRGyf6jgh61s+5SE6bR0vZD2jRBpi5y1ByHzOjCTExvNdkLizguQgBrmz1wSe9/S8zG1FYNq3OQ/izC7mN3UenpjrZtBC9nPXDk4MEMc7iz0778DE7LIQK+Q4//CgRKeFxKD+keMMy0MSA8TZgCWcQ/rFwYidp0iL+LNkD0Ws3qEpRecBc7yF/jBEp013HjDXmc4HIaJvQoyQ61zuAxBzE26ykOv0p70T2/eFjmIh18nVeya2CnoZgtCwOV5Itlei0ynoZQhCPeI59GKfxO3NNQohV4e6R2JhN0oW6hMViMEN1oAXqkAMCscJkFAf85yStA8iCUgUyk4kAslCuYlkIEAo870IAEKE8hIhQJBQH0hJdAjDBI1Qjz35JnAOfqCnFOoRz9FcpRCr1Yh82RTCZKUh12KqfYeZbLMJ9aFMS+KgeD3ILtTH0mxsOKBOlF6ox74cO3DVNqyPoRfqRsi+j1oXRuyAb0F6oa5PXeZhQxDRCdAbv6KEeqwxV6MQYruR+wpUsFDXZy7r3chPdIL8N6DihRzVyEtsV2m6GHahrlus1chFbASn5EsTJNSjkHH4Zyc6nTvaO5BHmCw3bLamykpst0ELCYHCdOBgmqkyEatsDZRTqBtXTRYjPbEa3APXEYKFye14xVKPlMRq8IjtBhQhTI0M9UhDTHy4LfvyhYmx71H3OWBiO/idq/6ECJP7cep5lOMjiNjoBE857j+BwiSDEeUNSf4VQzW4Yx0ftiNGmDRWy6SqSDyx2unccjfPZUQJk3T7NK21mFjtBPdiqm8egUI9RfqeCT2PGKVzktp7dEO1wiVFrDBJbIVN34TU5S7RqbaD1q1Ynl6CMIkx6Pc8j6zMEBtJ03Tu3wroOnMpQ5jG6E6Hnuvha7M+t7U7QXB3elOGLk1ZwnmMeDILtRTqm6aZ2Ta37eRv3/fcTvvu/m1puHlKFS4Txd3J2JoNR2HYu9aue2E4Gs6s8aQbR6JvOkT+DwCYOF9pIc88AAAAAElFTkSuQmCC" alt="rocket_contact"/> -->
      <!-- </div> -->
      <a class="navbar-brand" href="#main">My Fitness</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#main">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main id="spapp" role="main">
    <section id="main">Home</section>
    <section id="about">About</section>
    <section id="services">Services</section>
    <section id="contact">Contact</section>
    <section id="programs">Programs</section>
  </main>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>

  <script src="assets/js/jquery.spapp.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
