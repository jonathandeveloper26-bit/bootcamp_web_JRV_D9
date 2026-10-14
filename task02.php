<?php
    function render_body(string $page_name) {
        if (in_array($page_name,["home", "php", "sql"])) {
            return '<header>
                    <h1>Hello!</h1>
                    </header>
                    <main>
                        <p>I am in the main right now.</p>
                    </main>
                    <footer>
                        <aside>
                            I am in the footer/aside!
                        </aside>

                    </footer>';
        }
    }
?>

