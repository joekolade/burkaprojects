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

TEMP.bsr = USER
TEMP.bsr {
	userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
	vendorName = Joekolade
	extensionName = Burkaprojects
	pluginName = Breadcrumblist
	#controller = Breadcrumb
	#action = breadcrumb

    settings {
        overallList = {$plugin.tx_burkaprojects_projectlist.settings.overallList}
    }
    persistence {
        storagePid = {$plugin.tx_burkaprojects_projectlist.persistence.storagePid}
    }
    view =< plugin.tx_burkaprojects_projectlist.view

    switchableControllerActions {
        Breadcrumb {
            1 = breadcrumb
        }
    }
}

[PIDinRootline = {$plugin.tx_burkaprojects_projectlist.settings.overallList}]
    lib.breadCrumb.20 < TEMP.bsr
[global]

#[globalVar = GP:tx_burkaprojects_projectlist|project > 0]
#
#    lib.breadCrumb.30 = COA
#    lib.breadCrumb.30 {
#
#        // Cat
#
#        // Project
#
#    }
#
#
#
[global]

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:burkaprojects/Configuration/TypoScript/Extensions/cs_seo_setup.ts">
