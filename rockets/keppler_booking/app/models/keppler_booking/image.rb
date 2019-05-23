# frozen_string_literal: true

module KepplerBooking
  # Image Model
  class Image < ApplicationRecord
    include ActivityHistory
    include CloneRecord
    include Uploadable
    include Downloadable
    include Sortable
    include Searchable
    acts_as_list
    acts_as_paranoid
    mount_uploader :img, AttachmentUploader
    belongs_to :room



    def self.index_attributes
      %i[img]
    end
  end
end
