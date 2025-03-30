<?php include "partials/header.php" ?>
    <main>
        <section class="content">
            <div class="title">
                <h1>Let's Connect!</h1>
                <hr>
            </div>

            
            <form id="contactForm">
                <div id="success"></div>
                <div class="mb-3" id="identity-form">
                    <div>
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" id="name"  name="name" autocomplete="off" required>
                    </div>
                    
                    <div>
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                    </div>
                </div>

                <div class="mb-3">
                  <label for="subject" class="form-label">Subject</label>
                  <input type="subject"  name="subject" class="form-control" id="subject" aria-describedby="subject" autocomplete="off" required>
                </div>

                <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                </div>
                <div class="btn-form">
                    <button type="submit" class="btn btn-success" id="sendMessageButton">Send</button>
                </div>
              </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="Javascript/message.js"></script>
</body>
</html>