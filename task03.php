<?php
    function dynamic_body() {
        if (in_array($_GET["page"], ["home", "php", "sql"])) {
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
        } else {
            return '<p>Unknown page</p>';
        }
        
    }