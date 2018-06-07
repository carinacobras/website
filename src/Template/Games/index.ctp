<?php
/**
 * @var \App\View\AppView $this
 */
?>
<h3>Team Fixtures, Results and Ladders</h3>
<p>The below links will direct you to the Sporting Pulse website. You can access fixture, results and ladders here.</p>
<div class="col-sm-12">
<div class="club-team-list clearfix">
<?php
    // Get the latest post in this category and display the titles
        $crawler->filter('.club-team-list .club-team-row')->each(function ($node, $i) {
            $even_or_odd = $i % 2 === 0 ? 'even' : 'odd';
            $node_html = $node->html();
            $node_html = str_replace('href="', 'href="http://websites.sportstg.com/', $node_html);
            print '<div class="club-team-row ' . $even_or_odd . '">' . $node_html . "</div>";
        });
?>
</div>
</div>
