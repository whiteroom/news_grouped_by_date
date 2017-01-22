news_grouped_by_date
====================

Custom ViewHelper for TYPO3 tx_news. 
Lists news items grouped by Date eg. year

Inspired by this gist: https://gist.github.com/daKmoR/1287203
Forked from https://github.com/unconnect/news_grouped_by_date
Final solution derived from  Charles Brunet, answered on stackoverflow, Apr 11 '13
Also took the viewHelper Code. Put this all together in a small TYPO3 extension
with one demo template to replace the standard news List.html

The demo template is nested in 3 version, using template layouts

1. Homepage view, using modified partials
2. Grouped by year view, using modified partials
3. Default view, unchanged tx_news partials, as defined in tx_news