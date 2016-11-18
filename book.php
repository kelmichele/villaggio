<?php $pageTitle="NYE Form | Villaggio Grille" ; $description="Join Villaggio for Happy Hour Celebrations!" ; 
include( 'inc/header.php'); ?>

<div class="nye-booking">
	<div class="page-content">
	    <div class="container">


			<div id="reservation">
			    <div class="rest-dtp-picker-wrapper dtp-with-header-footer" id="dtp-container">
			        <div class="content-block-header no-padding-bottom">
			            <h3>Make a reservation</h3></div>
			        <oc-component href="https://na-srs.opentable.com/v2/dtp/^1.0.25?showSearch=false&amp;metroId=436&amp;showLargerParty=false&amp;theme=com&amp;partySize=0" data-hash="0bb2c57ee8ffc15d326694b3b3c196011076a4b7" data-name="dtp" data-rendered="true" data-version="1.3.3">
			        


			        <style>
			            .rest-dtp-picker-wrapper {
			                background: #ECECEC;
			                border-radius: 5px;
			                -webkit-box-shadow: 0 1px 0px rgba(0, 0, 0, 0.1);
			                box-shadow: 0 1px 0px rgba(0, 0, 0, 0.1);
			                margin-bottom: 2rem
			            }
			            
			            .rest-dtp-picker-wrapper .dtp-picker {
			                border-radius: 4px;
			                -webkit-box-shadow: 0 1px 0px rgba(0, 0, 0, 0.1);
			                box-shadow: 0 1px 0px rgba(0, 0, 0, 0.1)
			            }
			            
			            .rest-dtp-picker-wrapper .dtp-result-text {
			                margin-top: 0;
			                margin-bottom: 1rem
			            }
			            
			            .dtp-picker {
			                *zoom: 1;
			                margin: 0;
			                position: relative;
			                border: none !important;
			                border-radius: 0 !important;
			                background: none !important
			            }
			            
			            .dtp-picker:before,
			            .dtp-picker:after {
			                content: " ";
			                display: table
			            }
			            
			            .dtp-picker:after {
			                clear: both
			            }
			            
			            .dtp-picker .highlighted {
			                border: 1px solid #60B2D0 !important
			            }
			            
			            .dtp-picker.double-search .highlighted .dtp-picker-search-icon {
			                color: #DA3743
			            }
			            
			            .dtp-picker .twitter-typeahead {
			                width: 100%
			            }
			            
			            .dtp-picker.single-search .tt-suggestion p {
			                padding: 0.5rem 1rem 0.5rem 2.4375rem
			            }
			            
			            .dtp-picker-selector {
			                width: 33.3333%;
			                float: left;
			                background: #fff;
			                position: relative;
			                height: 3rem;
			                margin: 0;
			                border: 1px solid rgba(0, 0, 0, 0.08);
			                border-bottom: none
			            }
			            
			            .search-control .dtp-picker-selector {
			                background: #f3f2f1
			            }
			            
			            .dtp-picker-selector.party-size-picker {
			                border-right: 0;
			                border-top-left-radius: 3px
			            }
			            
			            .double-search .dtp-picker-selector.party-size-picker {
			                border-top-left-radius: 0
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .dtp-picker-selector.party-size-picker {
			                    border-bottom-left-radius: 3px
			                }
			                .with-search .dtp-picker-selector.party-size-picker {
			                    border-bottom-left-radius: 0
			                }
			                .double-search .dtp-picker-selector.party-size-picker {
			                    border-bottom-left-radius: 0
			                }
			                .dtp-lang-en.with-search .dtp-picker-selector.party-size-picker {
			                    width: 22%
			                }
			                .dtp-lang-ja.with-search .dtp-picker-selector.party-size-picker {
			                    width: 11%
			                }
			                .dtp-lang-de.with-search .dtp-picker-selector.party-size-picker {
			                    width: 19%
			                }
			                .dtp-lang-es.with-search .dtp-picker-selector.party-size-picker {
			                    width: 21%
			                }
			                .dtp-lang-fr.with-search .dtp-picker-selector.party-size-picker {
			                    width: 23%
			                }
			            }
			            
			            @media only screen and (min-width: 48.0625em) {
			                .with-search .dtp-picker-selector.party-size-picker {
			                    border-bottom-left-radius: 3px
			                }
			                .double-search .dtp-picker-selector.party-size-picker {
			                    border-bottom-left-radius: 0
			                }
			                .dtp-lang-en.with-search .dtp-picker-selector.party-size-picker,
			                .dtp-lang-ja.with-search .dtp-picker-selector.party-size-picker,
			                .dtp-lang-de.with-search .dtp-picker-selector.party-size-picker,
			                .dtp-lang-es.with-search .dtp-picker-selector.party-size-picker,
			                .dtp-lang-fr.with-search .dtp-picker-selector.party-size-picker {
			                    width: 15%
			                }
			            }
			            
			            .dtp-picker-selector.date-picker {
			                border-right: 0
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .dtp-picker-selector.date-picker {
			                    width: 23%
			                }
			                .dtp-lang-es.with-search .dtp-picker-selector.date-picker {
			                    width: 21%
			                }
			                .dtp-lang-fr.with-search .dtp-picker-selector.date-picker {
			                    width: 22%
			                }
			            }
			            
			            @media only screen and (min-width: 48.0625em) {
			                .dtp-picker.with-search .dtp-picker-selector.date-picker {
			                    width: 23%
			                }
			                .dtp-lang-es.with-search .dtp-picker-selector.date-picker,
			                .dtp-picker-selector.date-picker .dtp-lang-fr.with-search {
			                    width: 23%
			                }
			            }
			            
			            .dtp-picker-selector.time-picker {
			                border-top-right-radius: 3px
			            }
			            
			            .double-search .dtp-picker-selector.time-picker {
			                border-top-right-radius: 0
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .dtp-picker-selector.time-picker {
			                    border-top-right-radius: 0
			                }
			                .single-search .dtp-picker-selector.time-picker {
			                    border-right: 0
			                }
			                .double-search .dtp-picker-selector.time-picker {
			                    border-top-right-radius: 3px
			                }
			                .dtp-lang-en.with-search .dtp-picker-selector.time-picker {
			                    width: 18%
			                }
			                .dtp-lang-ja.with-search .dtp-picker-selector.time-picker {
			                    width: 14%
			                }
			                .dtp-lang-de.with-search .dtp-picker-selector.time-picker {
			                    width: 14%
			                }
			                .dtp-lang-es.with-search .dtp-picker-selector.time-picker {
			                    width: 18%
			                }
			                .dtp-lang-fr.with-search .dtp-picker-selector.time-picker {
			                    width: 18%
			                }
			            }
			            
			            @media only screen and (min-width: 48.0625em) {
			                .double-search .dtp-picker-selector.time-picker {
			                    border-right: 0;
			                    border-top-right-radius: 0
			                }
			                .dtp-lang-en.with-search .dtp-picker-selector.time-picker,
			                .dtp-lang-ja.with-search .dtp-picker-selector.time-picker,
			                .dtp-lang-de.with-search .dtp-picker-selector.time-picker,
			                .dtp-lang-es.with-search .dtp-picker-selector.time-picker,
			                .dtp-lang-fr.with-search .dtp-picker-selector.time-picker {
			                    width: 15%
			                }
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .dtp-picker-selector {
			                    width: 25%;
			                    border-bottom: 1px solid rgba(0, 0, 0, 0.08)
			                }
			            }
			            
			            @media only screen and (min-width: 48.0625em) {
			                .dtp-picker-selector {
			                    border-bottom: 1px solid rgba(0, 0, 0, 0.08)
			                }
			                .dtp-picker.with-search .dtp-picker-selector {
			                    width: 15%
			                }
			            }
			            
			            .dtp-picker-selector select {
			                position: absolute;
			                opacity: 0;
			                top: 0;
			                height: 100%;
			                width: 100%;
			                cursor: pointer;
			                border-radius: 0;
			                -webkit-appearance: none;
			                -webkit-border-radius: 0;
			                color: #333;
			                background-color: #fff;
			                z-index: 2
			            }
			            
			            .dtp-picker-selector-link {
			                position: relative;
			                display: block;
			                color: #333;
			                padding-top: 0.8125rem;
			                height: 3rem;
			                line-height: 1.2rem;
			                z-index: 1;
			                text-align: center
			            }
			            
			            .dtp-picker-selector-link:hover {
			                color: #000
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .dtp-picker-selector-link {
			                    padding: 0.8125rem 1rem;
			                    text-align: left
			                }
			            }
			            
			            .dtp-picker-selector-link:after {
			                font-family: icons;
			                content: "D";
			                color: #999;
			                font-size: 1.3125rem;
			                position: absolute;
			                right: 50%;
			                margin-right: -0.5rem;
			                bottom: 0
			            }
			            
			            .domain-com .dtp-picker-selector-link:after {
			                top: .875rem
			            }
			            
			            .domain-comau .dtp-picker-selector-link:after,
			            .domain-ie .dtp-picker-selector-link:after {
			                display: none
			            }
			            
			            @media only screen and (min-width: 25.0625em) {
			                .domain-comau .dtp-picker-selector-link:after,
			                .domain-ie .dtp-picker-selector-link:after {
			                    display: block
			                }
			            }
			            
			            @media only screen and (min-width: 25.0625em) {
			                .dtp-picker-selector-link:after {
			                    top: 0.875rem;
			                    right: 0.875rem
			                }
			            }
			            
			            .dtp-picker-title {
			                color: #333;
			                font-size: 1.075rem;
			                padding: 18px 1rem;
			                height: 3rem
			            }
			            
			            .date-picker .dtp-picker-select,
			            .date-picker .dtp-picker-select:focus {
			                outline: 0;
			                position: absolute;
			                top: 0;
			                left: 0;
			                margin: 0;
			                cursor: pointer;
			                height: 100%;
			                border: 0;
			                opacity: 0
			            }
			            
			            .date-picker .dtp-picker-label {
			                overflow: hidden;
			                white-space: nowrap
			            }
			            
			            .dtp-picker-search-container {
			                height: 3rem;
			                position: relative;
			                clear: both;
			                background: #fff;
			                border: 1px solid rgba(0, 0, 0, 0.08)
			            }
			            
			            .single-search .dtp-picker-search-container {
			                border-bottom: 0
			            }
			            
			            .search-control .dtp-picker-search-container {
			                background: #f3f2f1
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .dtp-picker-search-container {
			                    width: 39%;
			                    clear: none;
			                    float: left;
			                    border-left: 1px solid rgba(0, 0, 0, 0.08)
			                }
			                .dtp-picker-search-container-query {
			                    clear: both
			                }
			                .single-search .dtp-picker-search-container {
			                    border-top-right-radius: 3px
			                }
			                .dtp-lang-en.with-search .dtp-picker-search-container {
			                    width: 37%
			                }
			                .dtp-lang-ja.with-search .dtp-picker-search-container {
			                    width: 52%
			                }
			                .dtp-lang-de.with-search .dtp-picker-search-container {
			                    width: 44%
			                }
			                .dtp-lang-es.with-search .dtp-picker-search-container {
			                    width: 40%
			                }
			                .dtp-lang-fr.with-search .dtp-picker-search-container {
			                    width: 37%
			                }
			            }
			            
			            @media only screen and (min-width: 48.0625em) {
			                .dtp-picker-search-container {
			                    border-bottom: 1px solid rgba(0, 0, 0, 0.08)
			                }
			                .with-search .dtp-picker-search-container {
			                    width: 31%
			                }
			                .single-search .dtp-picker-search-container {
			                    border-top-right-radius: 0;
			                    border-bottom: 1px solid rgba(0, 0, 0, 0.08)
			                }
			                .dtp-lang-en.with-search .dtp-picker-search-container,
			                .dtp-lang-ja.with-search .dtp-picker-search-container,
			                .dtp-lang-de.with-search .dtp-picker-search-container,
			                .dtp-lang-es.with-search .dtp-picker-search-container,
			                .dtp-lang-fr.with-search .dtp-picker-search-container {
			                    width: 31%
			                }
			            }
			            
			            .double-search .dtp-picker-search-container:first-of-type {
			                border-radius: 3px;
			                margin-bottom: 0.75rem
			            }
			            
			            .double-search .dtp-picker-search-container-query {
			                border-bottom: 0;
			                border-top-left-radius: 3px;
			                border-top-right-radius: 3px
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .double-search .dtp-picker-search-container-query {
			                    border-right: 0;
			                    border-top-right-radius: 0;
			                    border-bottom-left-radius: 0
			                }
			            }
			            
			            @media only screen and (min-width: 48.0625em) {
			                .double-search .dtp-picker-search-container-query {
			                    border-bottom: 1px solid rgba(0, 0, 0, 0.08);
			                    border-bottom-left-radius: 3px
			                }
			            }
			            
			            .dtp-picker-search-container .dtp-picker-search-icon {
			                position: absolute;
			                top: 1rem;
			                left: 0.5rem;
			                color: #999
			            }
			            
			            .dtp-picker-search-container .dtp-picker-search-icon.icon-location-mini {
			                color: #DA3743
			            }
			            
			            .single-search .dtp-picker-search-container .dtp-picker-search-icon {
			                left: 1rem
			            }
			            
			            .dtp-picker-search-container input {
			                border: 0;
			                margin: 0;
			                width: 100%;
			                outline: none;
			                box-shadow: none;
			                font-size: 1rem;
			                padding: 0.75rem 0.9375rem 0.8125rem 2rem;
			                background: transparent;
			                font-weight: 400;
			                white-space: nowrap;
			                text-overflow: ellipsis;
			                clear: both
			            }
			            
			            .single-search .dtp-picker-search-container input {
			                padding-left: 2.4375rem
			            }
			            
			            .dtp-picker-selector,
			            .dtp-picker-search-container {
			                -webkit-transition: border-color ease-in-out 0.15s;
			                -moz-transition: border-color ease-in-out 0.15s;
			                -ms-transition: border-color ease-in-out 0.15s;
			                transition: border-color ease-in-out 0.15s
			            }
			            
			            .dtp-picker-button {
			                border-radius: 0;
			                border-bottom-left-radius: 3px;
			                border-bottom-right-radius: 3px;
			                width: 100%;
			                height: 3rem;
			                margin: 0 !important;
			                font-weight: 600
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .dtp-picker-button {
			                    clear: none;
			                    float: right;
			                    width: 27%;
			                    border-top-right-radius: 3px;
			                    border-bottom-left-radius: 0
			                }
			                .with-search .dtp-picker-button {
			                    width: 100%;
			                    border-top-right-radius: 0;
			                    border-bottom-left-radius: 3px
			                }
			            }
			            
			            @media only screen and (min-width: 48.0625em) {
			                .with-search .dtp-picker-button {
			                    width: 16%;
			                    padding: 0 0.5rem;
			                    border-top-right-radius: 3px;
			                    border-bottom-left-radius: 0
			                }
			            }
			            
			            .offertime-indicator {
			                position: relative;
			                font-size: 0.875rem;
			                color: #666;
			                padding-left: 1.5rem;
			                display: inline-block
			            }
			            
			            .rest-dtp-picker-wrapper .offertime-indicator {
			                padding-top: 1rem
			            }
			            
			            .rest-dtp-picker-wrapper .times-footer .offertime-indicator {
			                float: right
			            }
			            
			            .offertime-indicator:before {
			                background-color: #811520;
			                color: #fff;
			                border-radius: 7px;
			                width: 15px;
			                height: 15px;
			                line-height: 15px;
			                font-size: 0.6875rem;
			                text-align: center;
			                font-weight: normal;
			                font-family: Arial, sans-serif;
			                content: attr(data-offers-count);
			                -webkit-font-smoothing: none;
			                -moz-osx-font-smoothing: none;
			                padding-left: 2px;
			                display: inline-block;
			                position: absolute;
			                left: 0
			            }
			            
			            .offertime-indicator.with-points:before {
			                background-color: #811520;
			                color: #fff;
			                border-radius: 7px;
			                width: 15px;
			                height: 15px;
			                line-height: 15px;
			                font-size: 0.6875rem;
			                text-align: center;
			                font-weight: normal;
			                font-family: Arial, sans-serif;
			                content: "";
			                -webkit-font-smoothing: none;
			                -moz-osx-font-smoothing: none;
			                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QzUzMzBERTQyMDlCMTFFNDk0OEVFRjU0MzVFMThDQzciIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDFCMkI4QjYyMEI1MTFFNDk0OEVFRjU0MzVFMThDQzciPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDNTMzMERFMjIwOUIxMUU0OTQ4RUVGNTQzNUUxOENDNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDNTMzMERFMzIwOUIxMUU0OTQ4RUVGNTQzNUUxOENDNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pr7lehEAAAAmSURBVHjaYvz//z8DEgBxGGEcJgY8AK8kC9QodKPhkozUtxMgwAAySgcOYy2xpAAAAABJRU5ErkJggg==);
			                background-repeat: no-repeat;
			                background-position: 4px 4px;
			                display: inline-block;
			                position: absolute;
			                left: 0
			            }
			            
			            .dtp-additional-link {
			                color: #60B2D0;
			                margin-top: 1rem;
			                display: inline-block
			            }
			            
			            .dtp-additional-link:hover {
			                color: #3a9ec3
			            }
			            
			            .rest-dtp-picker-wrapper .times-footer .dtp-additional-link {
			                float: none !important
			            }
			            
			            .dtp-with-header-footer {
			                background-color: #fff
			            }
			            
			            .dtp-with-header-footer .dtp-picker {
			                padding: 1.5rem;
			                background-color: #fff;
			                box-shadow: none
			            }
			            
			            .dtp-with-header-footer .dtp-picker-selector {
			                border-top: 1px solid rgba(0, 0, 0, 0.08);
			                border-bottom: 1px solid rgba(0, 0, 0, 0.08);
			                height: 3rem
			            }
			            
			            .dtp-with-header-footer .dtp-picker-selector:first-of-type {
			                border-left: 1px solid rgba(0, 0, 0, 0.08);
			                border-radius: 3px 0 0 0
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .dtp-with-header-footer .dtp-picker-selector:first-of-type {
			                    border-bottom-left-radius: 3px
			                }
			            }
			            
			            .dtp-with-header-footer .dtp-picker-selector:last-of-type {
			                border-radius: 0 3px 0 0
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                .dtp-with-header-footer .dtp-picker-selector:last-of-type {
			                    border-radius: 0 !important
			                }
			            }
			            
			            .dtp-with-header-footer .dtp-results > .content-section-body {
			                padding-top: 0
			            }
			            
			            .dtp-results .text-arrow-left-before:before {
			                right: 0 !important
			            }
			            
			            .dtp-with-header-footer .icon-phone-large,
			            .listing .icon-phone-large {
			                margin-bottom: 0
			            }
			            
			            .dtp-with-header-footer .icon-phone-large:before,
			            .listing .icon-phone-large:before {
			                padding-right: 0.5rem;
			                color: #60B2D0
			            }
			            
			            .tt-footer.ot-autocomplete--places {
			                *zoom: 1;
			                padding-right: 1rem;
			                padding-top: 0.5rem
			            }
			            
			            .tt-footer.ot-autocomplete--places:before,
			            .tt-footer.ot-autocomplete--places:after {
			                content: " ";
			                display: table
			            }
			            
			            .tt-footer.ot-autocomplete--places:after {
			                clear: both
			            }
			            
			            .tt-footer.ot-autocomplete--places img {
			                float: right
			            }
			            
			            span.ot-autocomplete--places.muted {
			                font-size: inherit
			            }
			            
			            .tt-dropdown-menu {
			                position: absolute;
			                background: #fff;
			                border: none !important;
			                border-bottom-left-radius: 3px;
			                border-bottom-right-radius: 3px;
			                box-shadow: 0px 0px 0px 1px #e0e0e0;
			                width: 100%;
			                top: 90%;
			                display: none;
			                color: #333;
			                z-index: 100
			            }
			            
			            .tt-dropdown-menu [class*="tt-dataset-"] {
			                *zoom: 1;
			                overflow: hidden;
			                border-radius: 3px
			            }
			            
			            .tt-dropdown-menu [class*="tt-dataset-"]:before,
			            .tt-dropdown-menu [class*="tt-dataset-"]:after {
			                content: " ";
			                display: table
			            }
			            
			            .tt-dropdown-menu [class*="tt-dataset-"]:after {
			                clear: both
			            }
			            
			            .tt-dropdown-menu [class*="tt-dataset-"] > p {
			                font-size: 0.875rem;
			                line-height: 1rem;
			                text-transform: uppercase;
			                font-weight: 600;
			                color: #999;
			                padding: 1rem 1rem 0.5rem 1rem;
			                margin: 0
			            }
			            
			            .tt-dropdown-menu [class*="tt-dataset-"] > p span {
			                color: #DA3743
			            }
			            
			            .tt-header,
			            .tt-footer {
			                position: relative;
			                margin: 0
			            }
			            
			            .tt-header p,
			            .tt-footer p {
			                margin: 0;
			                padding: 0.5rem 1rem;
			                font-size: 0.875rem;
			                line-height: 1.2rem
			            }
			            
			            .tt-header[class*="icon-"],
			            .tt-footer[class*="icon-"] {
			                padding-left: 1.5rem
			            }
			            
			            .tt-header .before,
			            .tt-header:before,
			            .tt-footer .before,
			            .tt-footer:before {
			                position: absolute;
			                left: 1.2em;
			                top: 1rem
			            }
			            
			            .tt-header .before .checkbox-flat,
			            .tt-footer .before .checkbox-flat {
			                margin-top: -8px
			            }
			            
			            .tt-header {
			                padding-top: 0.5rem
			            }
			            
			            .tt-footer {
			                padding-bottom: 0.5rem;
			                border-bottom: none !important
			            }
			            
			            .tt-instruction-header {
			                margin: 0;
			                padding: 1rem 3rem 1rem 3rem
			            }
			            
			            .tt-instruction-header .icons {
			                font-size: 2rem;
			                padding: 1rem;
			                text-align: center
			            }
			            
			            .tt-instruction-header .icons [class^="icon-"],
			            .tt-instruction-header .icons [class*="icon-"] {
			                padding: 0.75rem
			            }
			            
			            .tt-instruction-header.tt-instruction-header-type-a {
			                padding-top: 1.5rem;
			                padding-bottom: 1.5rem;
			                background-color: #F7F7F7
			            }
			            
			            .tt-instruction-header.tt-instruction-header-type-a .muted {
			                color: #999
			            }
			            
			            .tt-instruction-header.tt-instruction-header-type-b,
			            .tt-instruction-header.tt-instruction-header-type-c {
			                margin-left: -0.5rem;
			                margin-right: -0.5rem
			            }
			            
			            .tt-dataset-Footer .tt-footer {
			                padding-top: 0.5rem;
			                background-color: #F7F7F7
			            }
			            
			            .tt-hint {
			                color: #666
			            }
			            
			            .tt-suggestion p {
			                margin: 0;
			                padding: 0.5rem 1rem;
			                color: #999;
			                font-size: 1rem;
			                line-height: 1rem
			            }
			            
			            .tt-suggestion p.international {
			                width: 100%;
			                white-space: nowrap !important;
			                overflow: hidden;
			                text-overflow: ellipsis
			            }
			            
			            .tt-suggestion p:hover,
			            .tt-suggestion p:focus {
			                color: #fff;
			                background: #DA3743;
			                cursor: pointer
			            }
			            
			            .tt-suggestion p:hover .muted,
			            .tt-suggestion p:hover strong,
			            .tt-suggestion p:focus .muted,
			            .tt-suggestion p:focus strong {
			                color: #fff
			            }
			            
			            .tt-suggestion p strong {
			                font-weight: 600;
			                color: #333
			            }
			            
			            .tt-suggestion p .muted {
			                font-size: 0.875rem;
			                color: #999
			            }
			            
			            .tt-suggestion.tt-cursor p {
			                color: #fff;
			                background: #DA3743;
			                cursor: pointer
			            }
			            
			            .tt-suggestion.tt-cursor p strong {
			                color: #fff
			            }
			            
			            #AB-twoBoxV2 .dtp-picker-search-container-location,
			            #AB-twoBoxV2 .dtp-picker-search-container-query {
			                margin-bottom: 0;
			                border-bottom-left-radius: 0;
			                border-bottom-right-radius: 0
			            }
			            
			            #AB-twoBoxV2 .dtp-picker-search-container-query {
			                border-top-left-radius: 0;
			                border-top-right-radius: 0
			            }
			            
			            @media only screen and (min-width: 40.0625em) {
			                #AB-twoBoxV2 .dtp-picker-search-container-location {
			                    width: 100%;
			                    border-top-right-radius: 3px
			                }
			                #AB-twoBoxV2 .dtp-picker-search-container-query {
			                    float: left
			                }
			                #AB-twoBoxV2 .dtp-picker-selector {
			                    width: 20%
			                }
			                #AB-twoBoxV2 .time-picker {
			                    border-top-right-radius: 0;
			                    width: 23%
			                }
			            }
			            
			            @media only screen and (min-width: 48.0625em) {
			                #AB-twoBoxV2 .dtp-picker-search-container-location {
			                    border-top-right-radius: 0;
			                    border-bottom-left-radius: 3px
			                }
			                #AB-twoBoxV2 .dtp-picker-search-container {
			                    width: 18%;
			                    clear: unset
			                }
			                #AB-twoBoxV2 .dtp-picker-selector {
			                    width: 17%
			                }
			                #AB-twoBoxV2 .time-picker {
			                    width: 14%
			                }
			            }
			            </style>
			            <style>
			            @media (min--moz-device-pixel-ratio: 1.5),
			            (-o-min-device-pixel-ratio: 3 / 2),
			            (-webkit-min-device-pixel-ratio: 1.5),
			            (min-device-pixel-ratio: 1.5),
			            (min-resolution: 144dpi),
			            (min-resolution: 1.5dppx) {
			                .tt-dropdown-menu:before {
			                    background-image: url('//components.otstatic.com/components/dtp/1.3.3/img/menu-arrow@2x.png') !important;
			                    background-size: 100%;
			                }
			            }
			       	</style>
			            

					<div class="dtp-picker dtp-lang-en single-search initialised">
					                <form class="dtp-picker-form">
					                    <div>
					                        <input type="hidden" name="timezoneOffset" title="timezoneOffset" value="-360">
					                        <div class="party-size-picker dtp-picker-selector select-native unselected-on-init"> <a class="select-label dtp-picker-selector-link" tabindex="-1">2 people</a>
					                            <select name="Select_1" tabindex="1" aria-label="How many people?">
					                                <option value="1">1 person</option>
					                                <option value="2">2 people</option>
					                                <option value="3">3 people</option>
					                                <option value="4">4 people</option>
					                                <option value="5">5 people</option>
					                                <option value="6">6 people</option>
					                                <option value="7">7 people</option>
					                                <option value="8">8 people</option>
					                                <option value="9">9 people</option>
					                                <option value="10">10 people</option>
					                                <option value="11">11 people</option>
					                                <option value="12">12 people</option>
					                                <option value="13">13 people</option>
					                                <option value="14">14 people</option>
					                                <option value="15">15 people</option>
					                                <option value="16">16 people</option>
					                                <option value="17">17 people</option>
					                                <option value="18">18 people</option>
					                                <option value="19">19 people</option>
					                                <option value="20">20 people</option>
					                            </select>
					                        </div>
					                        <div class="date-picker dtp-picker-selector"> <a class="dtp-picker-selector-link date-label dtp-picker-label">Nov 17, 2016</a>
					                            <input type="text" title="datepicker" name="datepicker" class="datepicker dtp-picker-select picker__input" data-value="2016-11-17" readonly="" id="P356637210" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P356637210_root submit_datepicker" tabindex="2">
					                            <div class="picker" id="P356637210_root" aria-hidden="true">
					                                <div class="picker__holder">
					                                    <div class="picker__frame">
					                                        <div class="picker__wrap">
					                                            <div class="picker__box">
					                                                <div class="picker__header">
					                                                    <div class="picker__month">November</div>
					                                                    <div class="picker__year">2016</div>
					                                                    <div class="picker__nav--prev picker__nav--disabled" data-nav="-1" role="button" aria-controls="P356637210_table" title="Previous month"> </div>
					                                                    <div class="picker__nav--next" data-nav="1" role="button" aria-controls="P356637210_table" title="Next month"> </div>
					                                                </div>
					                                                <table class="picker__table" id="P356637210_table" role="grid" aria-controls="P356637210" aria-readonly="true">
					                                                    <thead>
					                                                        <tr>
					                                                            <th class="picker__weekday" scope="col" title="Sunday">Sun</th>
					                                                            <th class="picker__weekday" scope="col" title="Monday">Mon</th>
					                                                            <th class="picker__weekday" scope="col" title="Tuesday">Tue</th>
					                                                            <th class="picker__weekday" scope="col" title="Wednesday">Wed</th>
					                                                            <th class="picker__weekday" scope="col" title="Thursday">Thu</th>
					                                                            <th class="picker__weekday" scope="col" title="Friday">Fri</th>
					                                                            <th class="picker__weekday" scope="col" title="Saturday">Sat</th>
					                                                        </tr>
					                                                    </thead>
					                                                    <tbody>
					                                                        <tr>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1477803600000" role="gridcell" aria-disabled="true">30</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1477890000000" role="gridcell" aria-disabled="true">31</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1477976400000" role="gridcell" aria-disabled="true">1</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478062800000" role="gridcell" aria-disabled="true">2</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478149200000" role="gridcell" aria-disabled="true">3</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478235600000" role="gridcell" aria-disabled="true">4</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478322000000" role="gridcell" aria-disabled="true">5</div>
					                                                            </td>
					                                                        </tr>
					                                                        <tr>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478408400000" role="gridcell" aria-disabled="true">6</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478498400000" role="gridcell" aria-disabled="true">7</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478584800000" role="gridcell" aria-disabled="true">8</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478671200000" role="gridcell" aria-disabled="true">9</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478757600000" role="gridcell" aria-disabled="true">10</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478844000000" role="gridcell" aria-disabled="true">11</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1478930400000" role="gridcell" aria-disabled="true">12</div>
					                                                            </td>
					                                                        </tr>
					                                                        <tr>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1479016800000" role="gridcell" aria-disabled="true">13</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1479103200000" role="gridcell" aria-disabled="true">14</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1479189600000" role="gridcell" aria-disabled="true">15</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1479276000000" role="gridcell" aria-disabled="true">16</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1479362400000" role="gridcell" aria-activedescendant="true">17</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1479448800000" role="gridcell">18</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1479535200000" role="gridcell">19</div>
					                                                            </td>
					                                                        </tr>
					                                                        <tr>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1479621600000" role="gridcell">20</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1479708000000" role="gridcell">21</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1479794400000" role="gridcell">22</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1479880800000" role="gridcell">23</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1479967200000" role="gridcell">24</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1480053600000" role="gridcell">25</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1480140000000" role="gridcell">26</div>
					                                                            </td>
					                                                        </tr>
					                                                        <tr>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1480226400000" role="gridcell">27</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1480312800000" role="gridcell">28</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1480399200000" role="gridcell">29</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--infocus" data-pick="1480485600000" role="gridcell">30</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1480572000000" role="gridcell">1</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1480658400000" role="gridcell">2</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1480744800000" role="gridcell">3</div>
					                                                            </td>
					                                                        </tr>
					                                                        <tr>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1480831200000" role="gridcell">4</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1480917600000" role="gridcell">5</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1481004000000" role="gridcell">6</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1481090400000" role="gridcell">7</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1481176800000" role="gridcell">8</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1481263200000" role="gridcell">9</div>
					                                                            </td>
					                                                            <td role="presentation">
					                                                                <div class="picker__day picker__day--outfocus" data-pick="1481349600000" role="gridcell">10</div>
					                                                            </td>
					                                                        </tr>
					                                                    </tbody>
					                                                </table>
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					                            <input type="hidden" name="submit_datepicker" id="submit_datepicker" value="2016-11-17" tabindex="2">
					                        </div>
					                        <div class="time-picker dtp-picker-selector select-native unselected-on-init"> <a class="select-label dtp-picker-selector-link" tabindex="-1">7:00 PM</a>
					                            <select name="Select_0" tabindex="3" aria-label="Select an hour">
					                                <option value="14:30">2:30 PM</option>
					                                <option value="15:00">3:00 PM</option>
					                                <option value="15:30">3:30 PM</option>
					                                <option value="16:00">4:00 PM</option>
					                                <option value="16:30">4:30 PM</option>
					                                <option value="17:00">5:00 PM</option>
					                                <option value="17:30">5:30 PM</option>
					                                <option value="18:00">6:00 PM</option>
					                                <option value="18:30">6:30 PM</option>
					                                <option value="19:00">7:00 PM</option>
					                                <option value="19:30">7:30 PM</option>
					                                <option value="20:00">8:00 PM</option>
					                                <option value="20:30">8:30 PM</option>
					                                <option value="21:00">9:00 PM</option>
					                                <option value="21:30">9:30 PM</option>
					                                <option value="22:00">10:00 PM</option>
					                                <option value="22:30">10:30 PM</option>
					                                <option value="23:00">11:00 PM</option>
					                                <option value="23:30">11:30 PM</option>
					                            </select>
					                        </div>
					                        <input type="submit" value="Find a Table" class="button dtp-picker-button" tabindex="5">
					                    </div>
					                </form>
					                <script>
					                window.OT = window.OT || {};
					                window.dtp_data = {
					                    theme: 'com',
					                    lang: 'en',
					                    ocUrl: 'na-srs.opentable.com/v2/',
					                    allowYesterday: false
					                };
					                </script>
					                <script src="//components.otstatic.com/components/dtp/1.3.3/dist/dtp.js"></script>
					</div>

					<script>
			            window.oc = window.oc || {};
			            oc.renderedComponents = oc.renderedComponents || {};
			            oc.renderedComponents["dtp"] = "1.3.3";
			        </script>
			        </oc-component><span class="dtp-results" id="dtp-results"></span>
			        <script type="text/javascript">
				        document.booking = {
				            options: {
				                rid: 91339,
				                searchHost: "//www.opentable.com/",
				                restaurantType: "ERB",
				                isRestRef: true,
				                bookingValidateUrl: "",
				                tableCategoryStrings: {
				                    default: 'Standard',
				                    bar: 'Bar',
				                    highTop: 'High-Top',
				                    counter: 'Counter',
				                    outdoor: 'Outdoor',
				                    unavailable: 'Unavailable',
				                    title: 'Please select a table type',
				                    buttonText: 'Select'
				                }
				            }
				        };
			        </script>

			    </div>
			</div>

        </div>
    </div>
</div>
<?php include( 'inc/footer.php'); ?>