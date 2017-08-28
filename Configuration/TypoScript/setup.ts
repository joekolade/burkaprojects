plugin.tx_burkaprojects_projectlist {
    view {
        templateRootPaths.0 = EXT:burkaprojects/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_burkaprojects_projectlist.view.templateRootPath}
        partialRootPaths.0 = EXT:burkaprojects/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_burkaprojects_projectlist.view.partialRootPath}
        layoutRootPaths.0 = EXT:burkaprojects/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_burkaprojects_projectlist.view.layoutRootPath}
    }

    persistence {
        storagePid = {$plugin.tx_burkaprojects_projectlist.persistence.storagePid}
        #recursive = 1
    }

    features {
        #skipDefaultArguments = 1
    }

    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }

    settings {
        overallList = {$plugin.tx_burkaprojects_projectlist.settings.overallList}

        list {
            imageWidth = {$plugin.tx_burkaprojects_projectlist.settings.list.imageWidth}
            imageHeight = {$plugin.tx_burkaprojects_projectlist.settings.list.imageHeight}
        }
    }
}

// Extend breadcrumbs from template

lib.bsr = USER_INT
lib.bsr {
	userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
	pluginName = Projectlist
	extensionName = Burkaprojects
	controller = Project
	action = breadcrumb
	vendorName = Joekolade

#	settings =< plugin.tx_burkaprojects.settings
#	persistence =< plugin.tx_burkaprojects.persistence.storagePid
#	view =< plugin.tx_burkaprojects.view
}

lib.breadCrumb.20 < lib.bsr

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:burkaprojects/Configuration/TypoScript/Extensions/cs_seo_setup.ts">
