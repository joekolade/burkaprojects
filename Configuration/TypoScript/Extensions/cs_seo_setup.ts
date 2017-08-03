# default configuration to show a sitemap.xml for tx_news records #
plugin.tx_csseo.sitemap {
    extensions {
        # configuration for an extension, the name is an identifier
        burkaprojects {
            table = tx_burkaprojects_domain_model_project

            # string; will be attached to the typolink, more params are possible, the last one is the record param
            additionalParams = tx_burkaprojects_projectlist[project]

            # string; add custom query options : title LIKE '%top%'
            additionalWhereClause =

            # comma separated list; page uid where are the records stored
            storagePid = 34

            # int; page uid where the details are shown
            detailPid = 51

            # comma separated list; configure the available languages, e.g.: 0,1
            languageUids =

            # comma separated list; display only records with this categories
            categories =
        }

        #burkaprojects_alu >
    }
}

# override canonical for projects
[globalVar = GP:tx_burkaprojects_projectlist|project > 0]
    page.headerData.654 {
        ### canonical ###
        10 >
        20 = TEXT
        20 {
            typolink {
                forceAbsoluteUrl = 1
                returnLast = url
                addQueryString = 1
                addQueryString.exclude = L,utm_medium,utm_source,utm_campaign,utm_content,tx_search_pi1[query],src,ref,gclid,cx,ie,cof,siteurl,zanpid,_ult
            }
            typolink {
                parameter = 51
                additionalParams >
                additionalParams.data = GP:tx_burkaprojects_projectlist|project
                additionalParams.wrap = &tx_burkaprojects_projectlist[project]=|
            }
            typolink >
            value = 51
            wrap = <link rel="canonical2" href="|" />
        }
    }
[global]