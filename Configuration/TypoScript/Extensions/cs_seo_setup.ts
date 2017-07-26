# default configuration to show a sitemap.xml for tx_news records #
plugin.tx_csseo.sitemap {
    extensions {
        # configuration for an extension, the name is an identifier
        burkaprojects_alu {
            table = tx_burkaprojects_domain_model_project

            # string; will be attached to the typolink, more params are possible, the last one is the record param
            additionalParams = tx_burkaprojects_projectlist[project]

            # string; add custom query options : title LIKE '%top%'
            additionalWhereClause =

            # comma separated list; page uid where are the records stored
            #storagePid = 34
            storagePid = 2

            # int; page uid where the details are shown
            #detailPid = 35
            detailPid = 3

            # comma separated list; configure the available languages, e.g.: 0,1
            languageUids =

            # comma separated list; display only records with this categories
            categories = 1,2,3,4

            # string; if categories were saved in the same table, set here the field name
            categoryField =

            # string; if categories were saved in a MM-Table set here the name of the table
            categoryMMTable = sys_category_record_mm

            # boolean; true if the MM table has a column 'tablenames' which contains the current record table
            categoryMMTablenames = 0

            # string; if set the column 'fieldname' of the MM-table must be this
            categoryMMFieldname =
        }
    }
}