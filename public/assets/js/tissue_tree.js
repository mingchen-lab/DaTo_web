/**
 * Created by fox on 17-6-3.
 */
// This file offers a list of tissues

var tissuetree = [
    {
        text:'Integumentary System',
        href:'#Integumentary_System',
        tags:['5'],
        nodes:[
            {
                text: 'Skin',
                href:'#Skin'
            },
            {
                text:'Hair Follicle - Stages',
                href:'#hair'
            },
            {
                text:'Vibrissa',
                href:'#vibrissa'
            },
            {
                text:'Footpad',
                href:'#footpad'
            },
            {
                text:'Nail',
                href:'#nail'
            }
        ]
    },
    {
        text:'Hematopoietic and Lymphopoietic',
        href:'#hematopoietic',
        tags:['6'],
        nodes:[
            {
                text:'Bone Marrow',
                href:'#bonemarrow'
            },
            {
                text:'Lymph Node',
                href:'#lymphnode'
            },
            {
                text:'Thymus',
                href:'#thymus'
            },
            {
                text:'Spleen',
                href:'#spleen'
            },
            {
                text:'Blood',
                href:'#blood'
            },
            {
                text:'Heart',
                href:'#heart'
            }
        ]
    },
    {
        text:'Gastrointestinal System',
        href:'#gastrointestinal',
        tags:['8'],
        nodes:[
            {
                text:'Oral Cavity',
                href:'#oralcavity',
                tags:['4'],
                nodes:[
                    {
                        text:'Anterior Tongue',
                        href:'#anteriortongue'
                    },
                    {
                        text:'Posterior Tongue',
                        href:'posteriortongue'
                    },
                    {
                        text:'Incisors',
                        href:'#incisors'
                    },
                    {
                        text:'Molars',
                        href:'#molars'
                    }
                ]
            },
            {
                text:'Pharynx',
                href:'#pharynx'
            },
            {
                text:'Esophagus',
                href:'#esophagus'
            },
            {
                text:'Stomach',
                href:'#stomach',
                tags:['2'],
                nodes:[
                    {
                        text:'Forestomach',
                        href:'#forestomach'
                    },
                    {
                        text:'Glandular Stomach',
                        href:'#glandularstomach'
                    }
                ]
            },
            {
                text:'Small Intestine',
                href:'#smallintestine',
                tags:['2'],
                nodes:[
                    {
                        text:'Duodenum',
                        href:'#duodenum'
                    },
                    {
                        text:'Jejunum and Ileum',
                        href:'#jejunumandileum'
                    }
                ]
            },
            {
                text:'Large Intestine',
                href:'#largeintestine',
                tags:['4'],
                nodes:[
                    {
                        text:'Cecum',
                        href:'#cecum'
                    },
                    {
                        text:'Colon',
                        href:'#colon'
                    },
                    {
                        text:'Rectum',
                        href:'#rectum'
                    },
                    {
                        text:'Anal Canal',
                        href:'#analcanal'
                    }
                ]

            },
            {
                text:'Accessory Glands',
                href:'#accesorygland',
                tags:['6'],
                nodes:[
                    {
                        text:'Parotid Gland',
                        href:'#parotidgland'
                    },
                    {
                        text:'Sublingual Gland',
                        href:'#sublingualgland'
                    },
                    {
                        text:'Submandibular Gland',
                        href:'#submandibulargland'
                    },
                    {
                        text:'Pancreas',
                        href:'#pancreas'
                    },
                    {
                        text:'Liver',
                        href:'#liver'
                    },
                    {
                        text:'Gallbladder',
                        href:'#gallbladder'
                    }
                ]
            }

        ]
    },
    {
        text:'Respiratory System',
        href:'#respiratorysystem',
        tags:['6'],
        nodes:[
            {
                text:'Anterior Nasal Cavity',
                href:'#anteriornasalcavity'
            },
            {
                text:'Turbinate',
                href:'#turbinate'
            },
            {
                text:'Pharynx and Epiglottis',
                href:'#pharynxandepiglottis'
            },
            {
                text:'Larynx',
                href:'#larynx'
            },
            {
                text:'Trachea',
                href:'#trachea'
            },
            {
                text:'Lung',
                href:'#lung'
            }
        ]
    },
    {
        text:'Urinary System',
        href:'#urinarysystem',
        tags:['4'],
        nodes:[
            {
                text:'Kidney',
                href:'#kidney',
                tags:['3'],
                nodes:[
                    {
                        text:'Cortex',
                        href:'#cortex'
                    },
                    {
                        text:'Medulla',
                        href:'#medulla'
                    },
                    {
                        text:'Papilla',
                        href:'#papilla'
                    }
                ]
            },
            {
                text:'Ureter',
                href:'#ureter'
            },
            {
                text:'Urinary Bladder',
                href:'#urinarybladder'
            },
            {
                text:'Urethra (Female)',
                href:'#urethrafemale'
            }
        ]
    },
    {
        text:'Male Reproductive System',
        href:'#malereproductivesystem',
        tags:['6'],
        nodes:[
            {
                text:'Testis',
                href:'#testis'
            },
            {
                text:'Epididymis',
                href:'#epididymis'
            },
            {
                text:'Vas Deferens',
                href:'#vasdeferens'
            },
            {
                text:'Urethra',
                href:'#urethra'
            },
            {
                text:'Accessory Glands',
                href:'#accessoryglands',
                tags:['6'],
                nodes:[
                    {
                        text:'Seminal Vesicle',
                        href:'#seminalvesicle'
                    },
                    {
                        text:'Dorsal Prostate',
                        href:'#dorsalprostate'
                    },
                    {
                        text:'Ventral Prostate',
                        href:'#ventralprostate'
                    },
                    {
                        text:'Anterior Prostate',
                        href:'#anteriorprostate'
                    },
                    {
                        text:'Bulbourethral Gland',
                        href:'#bulbourethralgland'
                    },
                    {
                        text:'Preputial Gland',
                        href:'#preputialgland'
                    }

                ]
            },
            {
                text:'Penis',
                href:'#penis'
            }
        ]
    },
    {
        text:'Female Reproductive System',
        href:'#femalereproductivesystem',
        tags:['7'],
        nodes:[
            {
                text:'Ovary',
                href:'#ovary'
            },
            {
                text:'Oviduct',
                href:'#oviduct'
            },
            {
                text:'Uterus',
                href:'#uterus'
            },
            {
                text:'Cervix',
                href:'#cervix'
            },
            {
                text:'Vagina',
                href:'#vagina'
            },
            {
                text:'Vagina - Stages',
                href:'#vagina-stages'
            },
            {
                text:'Mammary Gland in Virgin Mice',
                href:'#mammaryglandinvirginmice'
            }
        ]
    },
    {
        text:'Endocrine Organs',
        href:'#endocrineorgans',
        tags:['6'],
        nodes:[
            {
                text:'Pituitary Gland',
                href:'p#ituitarygland',
                tag:['3'],
                nodes:[
                    {
                        text:'Pars Distalis',
                        href:'#parsdistalis'
                    },
                    {
                        text:'Pars Intermedia',
                        href:'#parsintermedia'
                    },
                    {
                        text:'Pars Nervosa',
                        href:'#parsnervosa'
                    }
                ]
            },
            {
                text:'Pineal Gland',
                href:'#pinealgland'
            },
            {
                text:'Thyroid Gland',
                href:'#thyroidgland'
            },
            {
                text:'Parathyroid Gland',
                href:'#parathyroidgland'
            },
            {
                text:'Pancreas',
                href:'#pancreas'
            },
            {
                text:'Adrenal Gland',
                href:'#adrenalgland',
                tags:['2'],
                nodes:[
                    {
                        text:'Adrenal Gland in Young Mice',
                        href:'#adrenalglandinyoungmice'
                    },
                    {
                        text:'Adrenal Gland in Adult Mice',
                        href:'adrenalglandinadultmice'
                    }
                ]
            }
        ]
    },
    {
        text:'Nervous System',
        href:'#nervoussystem',
        tags:['5'],
        nodes:[
            {
                text:'Olfactory Bulb',
                href:'#olfactorybulb'
            },
            {
                text:'Cerebral Cortex',
                href:'#cerebralcortex'
            },
            {
                text:'Cerebellum',
                href:'#cerebellum'
            },
            {
                text:'Spinal Cord',
                href:'#spinalcord'
            },
            {
                text:'Spinal Ganglion',
                href:'#spinalganglion'
            }
        ]
    },
    {
        text:'Sense Organs',
        href:'#senseorgans',
        tags:['6'],
        nodes:[
            {
                text:'Eye',
                href:'#eye'
            },
            {
                text:'Inner Ear',
                href:'#innereye'
            },
            {
                text:'Turbinate - Olfactory Epithelium',
                href:'#turbinate-olfactoryepithelium'
            },
            {
                text:'Vomeronasal Organ',
                href:'#vomeronasalorgan'
            },
            {
                text:'Taste Bud',
                href:'#tastebud'
            },
            {
                text:'Zymbal Gland',
                href:'zymbalgland'
            }
        ]
    }
]

